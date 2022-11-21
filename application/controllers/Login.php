<?php
    class Login extends CI_Controller {

        private $qqur = "trabalhotrabalhosodoescobar, tinhaqueseroproprioagoraficaratetardedanoitefazendo@345";

        public function __construct() {
            parent::__construct();

            $this->load->model("LoginModel");
        }

        public function SalvarRegistro() {
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $num4 = rand(0, 9);
            $num5 = rand(0, 9);
            $num6 = rand(0, 9);

            $chave = $num1 . '' . $num2 . ''.
                        $num3 . '-' . $num4 . ''.
                        $num5 . '' . $num6 . '';

            $data = array(
                "email" => $_POST["email"],
                "nome" => $_POST["nome"],
                "chave" => $chave
            );

            

            $retorno = $this->LoginModel->registrar( $data );

            if ( $retorno )
                header("location: /index.php/login/formregistrarsenha");
            else
                echo "Erro ao criar usuário";
        }

        //Apenas chama o formulario
        public function formRegistrar() {
            $this->template->load("templates/cadastrar", "login/formregistrar");
        }

        //Apenas chama o formulario
        public function formRegistrarSenha() {
            $this->template->load("templates/cadastrarsenha", "login/formregistrarsenha");
        }

        //Alteração de senha
        public function AlterarSenha() {
            $senha = md5( $_POST["senha"] . $this->qqur );
            $email = $_POST["email"];
            $chave = $_POST["chave"];
            
            $retorno = $this->LoginModel->CriarSenha($email, $senha, $chave);

            if ($retorno){
                echo "Senha cadastrada com sucesso.";
            }else{
                echo "Senha não pode ser cadastrada.";
            }
            header("location: /index.php");
        }

        public function Index() {
            $this->template->load("templates/adminLogin", "login/login");
            
        }

        public function ValidaLogin() {
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $senha = md5( $senha . $this->qqur);

            $retorno = $this->LoginModel->ValidaLogin($email, $senha);

            if ( $retorno ) {
                $_SESSION["Padariadobarba"] = array(
                    "email" => $email                    
                );
                
                header("location: /index.php");
            }
            else {
                header("location: /index.php/login");
            }

        }
        /*
        public function CarregaPerfil(){
            $perfil = $this->LoginModel->CarregaPerfil();
            
            $tabela = "";
            foreach($perfil as $item ) {
    
                $tabela = $tabela . "<tr>";

                $tabela = $tabela . "
                        <td>" . $item->id ."</td>
                        <td>" . $item->nome ."</td>
                        <td>" . $item->email ."</td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_Tipo_Produto" => $perfil,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba!",
                "sucesso" => "Tipo de Produto cadastrado com sucesso!",
                "erro" => "Erro no cadastro do tipo de produto!"
            );

            $this->template->load("templates/adminTemp", "login/perfil", $variavel);
        }
        */
        public function deslogar() {
            session_destroy();
            header("location: /index.php/login");
        }
    }
?>
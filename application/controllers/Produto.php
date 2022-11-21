<?php

    class Produto extends CI_Controller {

        public function __construct(){
            parent::__construct();
            
            $this->load->model("ProdutoModel");
            $this->load->model("TipoProdutoModel");

            if ( !isset($_SESSION["Padariadobarba"]) ) {
               header("location: /index.php/login");
            }
        }

        public function index(){
            $produtos = $this->ProdutoModel->selecionarTodos();
            $table = "";

            foreach($produtos as $item){
                $table = $table . "<tr>";

                if (isset($_SESSION["Padariadobarba"])) {
                    $table = $table . "
                        <td style='cursor: pointer'>
                            <div class='text-center'>
                            <a class='btn btn-info btn-icon-split' href='/index.php/produto/alterar?codigo=" . $item->idproduto . "'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-info-circle'></i>
                                </span>
                                <span class='text'>Alterar</span>
                            </a>
                            <a class='btn btn-danger btn-icon-split' href='/index.php/produto/excluir?codigo=" . $item->idproduto . "'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-trash'></i>
                                </span>
                                <span class='text'> Excluir</span>
                            </a>
                            </div>
                        </td>";                    
                        
                }

                $table = $table . "
                        <td>" . $item->idproduto ."</td>
                        <td>" . $item->nome ."</td>
                        <td>" . $item->perecivel ."</td>                        
                        <td>" . $item->tipo_nome ."</td>
                        <td>" . $item->valor ."</td>

                    </tr>";
            }
            
            $variavel = array(
                    "Lista_Produtos"=> $produtos,
                    "tabela"=> $table,
                    "titulo"=> "Você está na Padaria do Barba!",
                    "sucesso"=> "Produto cadastrado com Sucesso!",
                    "erro"=> "Erro no Cadastro do Produto!"
            );

            $this->template->load("templates/adminTemp", "produto/index", $variavel);
        }

        public function formNovo(){
            $opcao = $this->montaTipoProdutos(0);
            $data = array(
                    'opcoes' => $opcao
                );
            
            $this->template->load("templates/adminTemp", "/produto/formnovo", $data);
        }

        public function salvarnovo(){

            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipoproduto = $_POST["tipoproduto"];
            $valor = $_POST["valor"];
 
            $retorno = $this->ProdutoModel->buscarProduto($nome);
            
            if ($retonor[0]->total > 0 ){
                echo "Não pode incluir, já existe um mesmo produto. Por favor, altere a sua quantidade!";
            }else{
                $retorno = $this->ProdutoModel->salvarnovo($nome, $perecivel, $tipoproduto, $valor);
                
                header("location: /index.php/produto");
            }
            
        }

        public function alterar(){
            $id = $_GET["codigo"];

            $retorno = $this->ProdutoModel->buscarId( $id );
            
            
            $data = array(
                "titulo"=>"Alteração de Produto",
                "produto"=>$retorno[0],
                "opcoes"=>$this->montaTipoProdutos($retorno[0]->id_tipo)
            );
            
            $this->template->load("templates/adminTemp", "produto/formalterar", $data);
            
        }

        public function salvaralteracao(){
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $perecivel = $_POST["perecivel"];
            $tipoproduto = $_POST["tipoproduto"];
            $valor = $_POST["valor"];

            $retorno = $this->ProdutoModel->salvaralteracao($id, $nome, $perecivel, $tipoproduto, $valor
            );

            if ($retorno == true){
                header("location: /index.php/produto");
            }else{
                echo "Houve um erro na Alteração!";
            }
        }

        private function montaTipoProdutos($codtipo){
            $tipoproduto = $this->TipoProdutoModel->selecionarTodos();

            $opcoes = "";
            foreach($tipoproduto as $linha){
                $selecionado = "";

                if ($codtipo == $linha->idtipo){
                    $selecionado = "selected";
                }
                $opcoes .= "<option
                                value='" . $linha->idtipo . "'
                                " . $selecionado . "
                            >"
                                . $linha->nome_tipo . 
                            "</option>";
            }
            return $opcoes;
        }

        public function excluir(){
            $id = $_GET["codigo"];

            $this->ProdutoModel->excluir($id);

            header("location: /index.php/produto");
        }

    }

?>
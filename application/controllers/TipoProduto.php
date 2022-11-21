<?php

    class TipoProduto extends CI_Controller {

        public function __construct() {
            parent::__construct();

            $this->load->model("TipoProdutoModel");
            
            if ( !isset($_SESSION["Padariadobarba"]) ) {
                header("location: /index.php/login");
            }
            
        }

        public function index() {
            $tipoproduto = $this->TipoProdutoModel->selecionarTodos();

            $tabela = "";
            foreach($tipoproduto as $item ) {
                //GET
                $tabela = $tabela . "<tr>";
                
                if ( isset($_SESSION["Padariadobarba"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <div class='text-center'>
                            <a class='btn btn-info btn-icon-split' href='/index.php/tipoproduto/alterar?codigo=" . $item->idtipo . "'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-info-circle'></i>
                                </span>
                                <span class='text'>Alterar</span>
                            </a>
                            <a class='btn btn-danger btn-icon-split' href='/index.php/tipoproduto/excluir?codigo=" . $item->idtipo . "'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-trash'></i>
                                </span>
                                <span class='text'> Excluir</span>   
                            </a>
                            </div>
                        </td>";
                }
                

                $tabela = $tabela . "
                        <td>" . $item->idtipo ."</td>
                        <td>" . $item->nome_tipo ."</td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_Tipo_Produto" => $tipoproduto,
                "tabela" => $tabela,
                "titulo" => "Você está na Padaria do Barba!",
                "sucesso" => "Tipo de Produto cadastrado com sucesso!",
                "erro" => "Erro no cadastro do tipo de produto!"
            );

            $this->template->load("templates/adminTemp", "tipoproduto/index", $variavel );
            //var_dump($variavel);   
        }

        public function formNovo(){
            $this->template->load("templates/adminTemp", "/tipoproduto/formnovo");
        }

        public function salvarnovo(){
            $tipoproduto = $_POST["tipoproduto"];
            $retorno = $this->TipoProdutoModel->salvarnovo($tipoproduto);

            header("location: /index.php/tipoproduto");

        }

        public function alterar(){
            $id = $_GET["codigo"];

            $retorno = $this->TipoProdutoModel->buscarId( $id );

            $data = array(
                    "titulo"=>"Correção de Tipo de Produtos",
                    "tipo"=>$retorno[0],
                    "opcoes"=>$this->montaTipoProdutos($retorno[0]->idtipo)
                );
           
            $this->template->load("templates/adminTemp", "tipoproduto/formAlterar", $data );

            //var_dump($data);
        }

        public function salvaralteracao(){
            $idtipo = $_POST["id"];
            $tipoproduto = $_POST["nome_tipo"];

            $retorno = $this->TipoProdutoModel->salvaralteracao($idtipo, $tipoproduto);

            if ($retorno == true){
                header("location: /index.php/tipoproduto");
            }else{
                echo "Houve erro na alteração!";
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

            $this->TipoProdutoModel->excluir($id);
            header("location: /index.php/tipoproduto");
            
        }
    }

?>
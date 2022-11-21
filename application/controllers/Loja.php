<?php

    class Loja extends CI_Controller {

        public function __construct(){
            parent::__construct();
            
            $this->load->model("LojaModel");
           
        }
        
        public function Index() {
            $this->template->load("templates/lojaTemp", "loja/index");
            
        } 

        public function sobre(){
            $this->template->load("templates/lojaTemp", "loja/sobre");
        }

        public function faleconosco(){
            $this->template->load("templates/lojaTemp", "loja/faleconosco");
        }

        public function noticias(){
            $this->template->load("templates/lojaTemp", "loja/noticias");
        }

        public function produtos(){
            $produtos = $this->LojaModel->selecionarProdutos();
            $table = "";

            foreach($produtos as $item){
                $table = $table . "<tr>";

                $table = $table . "
                        <td>" . $item->nome ."</td>                       
                        <td>" . $item->tipo_nome ."</td>
                        <td>" . $item->valor ."</td>
                    </tr>";
            }
            
            $data = array(
                    "Lista_Produtos"=> $produtos,
                    "tabela"=> $table,
                    "titulo"=> "Você está na Padaria do Barba!",
                    "sucesso"=> "Produto cadastrado com Sucesso!",
                    "erro"=> "Erro no Cadastro do Produto!"
            );

            $this->template->load("templates/lojaTemp", "loja/produtos/index", $data);
        }

    }

?>
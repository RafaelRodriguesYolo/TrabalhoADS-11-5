<?php

    class TipoProdutoModel extends CI_Model {

        public function selecionarTodos(){
            $dados = $this->db->query("SELECT * FROM tipoproduto ORDER BY nome_tipo")->result();
            return $dados;
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM tipoproduto WHERE idtipo=" . $id );
            return $retorno->result();
        }

        public function buscarTipoProduto( $tipoproduto ) {
            $sql = "SELECT COUNT(1) as total FROM tipoproduto WHERE nome_tipo='" . $tipoproduto . "'";

            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }

        public function inserir($dados){
            try{
                $this->db->insert('tipoproduto', $dados);
                return true;
            }
            catch (Exception $ex){
                return false;
            }
        }

        public function salvarnovo($tipoproduto) {
            $sql = "INSERT INTO tipoproduto 
                    (nome_tipo)
                    VALUES
                    ('" .$tipoproduto. "')
                ";

            $this->db->query( $sql );

            return true;
        }

        public function salvaralteracao( $idtipo, $tipoproduto ) {
            $sql = "UPDATE tipoproduto 
                    SET nome_tipo = '" . $tipoproduto . "'
                    WHERE idtipo= " . $idtipo . "
                ";
            $this->db->query( $sql );

            return true;
        }

        public function excluir($id) {
            $sql="DELETE FROM tipoproduto WHERE idtipo=" . $id;
            $this->db->query( $sql );
            return true;
        }
    }


?>
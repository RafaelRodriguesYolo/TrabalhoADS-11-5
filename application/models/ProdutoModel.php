<?php

    class ProdutoModel extends CI_Model {

        public function selecionarTodos() {
            $retorno = $this->db->query("SELECT P.*, T.nome_tipo AS tipo_nome
                                        FROM produto AS P
                                        INNER JOIN tipoproduto AS T
                                        ON idtipo = id_tipo");

            return $retorno->result();                            
        }

        public function buscarId( $id ){
            $retorno = $this->db->query("SELECT * FROM produto WHERE idproduto=" . $id);

            return $retorno->result();
        }

        public function buscarProduto( $nome ){
            $sql = "SELECT COUNT(1) AS TOTAL FROM produto WHERE nome='" . $nome ."'";
            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }

        public function salvarnovo($nome, $perecivel, $valor, $tipoproduto){
            $sql = "INSERT INTO produto
                    (nome, perecivel, valor, id_tipo)
                    VALUES
                    ('" . $nome . "', '" . $perecivel . "', '" . $tipoproduto . "', '" . $valor . "')
                ";

                $this->db->query( $sql );

                return true;
        }

        public function salvaralteracao($id, $nome, $perecivel, $tipoproduto, $valor){
            $sql = "UPDATE produto
                    SET 
                        nome = '" . $nome . "',
                        perecivel = '" . $perecivel . "',
                        valor = '" . $valor . "',
                        id_tipo = '" . $tipoproduto . "'
                    WHERE idproduto= " . $id . "
                ";
            $this->db->query( $sql );

            return true;
        }
        public function excluir($id){
            $sql = "DELETE FROM produto WHERE idproduto=" .$id;
            $this->db->query( $sql );
            
            return true;
        }
    }

?>
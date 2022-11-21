<?php

    class LojaModel extends CI_Model{

        public function selecionarProdutos() {
            $retorno = $this->db->query("SELECT P.nome, P.valor, T.nome_tipo AS tipo_nome
                                        FROM produto AS P
                                        INNER JOIN tipoproduto AS T
                                        ON idtipo = id_tipo");

            return $retorno->result();                            
        }
    }


?>
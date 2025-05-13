<?php
    namespace App\Model;

use PDO;
use PDOException;

    class ProdutoDao{
        public function create(Produto $p){
            $sql = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";
            $res = Conexao::getConn()->prepare($sql);
            $res->bindValue(1, $p->getNome());
            $res->bindValue(2, $p->getDescricao());

            $res->execute();
        }

        public function read(){
            $sql = "SELECT * FROM produtos";

            $res = Conexao::getConn()->prepare($sql);
            $res->execute();

            if($res->rowCount()>0){
                $list = $res->fetchAll(\PDO::FETCH_ASSOC);

                return $list;
            }
        }

        public function update(Produto $p){
            $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";

            $res = Conexao::getConn()->prepare($sql);
            $res->bindValue(1,$p->getNome());
            $res->bindValue(2,$p->getDescricao());
            $res->bindValue(3,$p->getId());

            $res->execute();
        }

        public function delete($id){

        }
    }
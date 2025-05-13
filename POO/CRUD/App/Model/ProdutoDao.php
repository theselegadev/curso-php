<?php
    namespace App\Model;

    class ProdutoDao{
        public function create(Produto $p){
            $sql = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";
            $res = Conexao::getConn()->prepare($sql);
            $res->bindValue(1, $p->getNome());
            $res->bindValue(2, $p->getDescricao());

            $res->execute();
        }

        public function read(){

        }

        public function update(Produto $p){

        }

        public function delete($id){

        }
    }
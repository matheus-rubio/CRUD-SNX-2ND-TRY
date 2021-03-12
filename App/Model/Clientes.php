<?php

    class Clientes
    {
        public static function selecionaTodos()
        {
            $conn = Connection::getConn();
            
            $sql = "SELECT * FROM clientes ORDER BY codigo";
            $sql = $conn->prepare($sql);  
            $sql->execute();

            $resultado = array();

            while ($row = $sql->fetchObject('Clientes'))
            {
                $resultado[] = $row;
            }
            
            return $resultado;
        }

        public static function selecionaPorId($id)
        {
            $conn = Connection::getConn();
            
            $sql = "SELECT * FROM clientes WHERE codigo = :id";
            $sql = $conn->prepare($sql);  
            $sql->bindValue(':id', $id, PDO::PARAM_INT);
            $sql->execute();

            $resultado = $sql->fetchObject('Clientes');

            if(!$resultado)
            {
                throw new Exception("Não foi encontrado nenhum registro no banco");
            }
            
                return $resultado;
        }

        public static function insert($cliente)
        {
            $conn = Connection::getConn();
            
            $sql =  "INSERT INTO clientes (nome, razao_social, cnpj)
                    VALUES (:nome, :razao, :cnpj)";
            $sql = $conn->prepare($sql);  
            $sql->bindValue(':nome',  $cliente['nomeCliente']);
            $sql->bindValue(':razao', $cliente['razaoSocial']);
            $sql->bindValue(':cnpj', $cliente['cnpjCliente']);
            $sql->execute();

        }

        public static function delete($id)
        {
            $conn = Connection::getConn();
            
            $sql =  "DELETE FROM clientes WHERE codigo = :id";
            $sql = $conn->prepare($sql);  
            $sql->bindValue(':id', $id, PDO::PARAM_INT);
            $resultado = $sql->execute();

            if(!$resultado)
            {
                throw new Exception("Falha ao remover cliente");
            }
            
                return $resultado;

        }

        public static function update($id)
        {
            $conn = Connection::getConn();
            
            $sql =  "UPDATE clientes SET codigo = :id, nome = :nome, razao_social = :razao WHERE codigo = :id";
            $sql = $conn->prepare($sql);  
            $sql->bindValue(':id', $id['codigoCliente']);
            $sql->bindValue(':nome',  $id['nomeCliente']);
            $sql->bindValue(':razao', $id['razaoSocial']);
            $sql->bindValue(':cnpj', $id['cnpjCliente']);
            //var_dump($sql);
            $resultado = $sql->execute();

            if(!$resultado)
            {
                throw new Exception("Falha ao editar cliente.");
            }
            
                return $resultado;

        }
    }
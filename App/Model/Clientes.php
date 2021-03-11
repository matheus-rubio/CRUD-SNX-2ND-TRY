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
            if(!$resultado)
            {
                throw new Exception("Não foi encontrado nenhum registro no banco");
            }
            return $resultado;
        }
    }
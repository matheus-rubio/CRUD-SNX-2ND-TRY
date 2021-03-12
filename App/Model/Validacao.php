<?php

class Validacao
{
    public static function usuarios()
    {
        $conn = Connection::getConnUsers();

        // Validação do usuário/senha digitados
        $sql = "SELECT * FROM usuarios ORDER BY cpf";
        $sql = $conn->prepare($sql);
        $sql->execute();

        $resultado = array();

        while ($row = $sql->fetchObject('Validacao')) {
            $resultado[] = $row;
        }

        return $resultado;
    }

    public static function update($novoUser)
    {
        $conn = Connection::getConn();
        
        
        $sql =  "UPDATE usuarios SET cpf = :cpf1, nome = :nome WHERE cpf = :cpf2";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':cpf1', $novoUser['cpf']);
        $sql->bindValue(':nome', $novoUser['nome']);
        $sql->bindValue(':cpf2', $_SESSION['UsuarioCpf']);

        $_SESSION['UsuarioCpf'] = $novoUser['cpf'];
        $_SESSION['UsuarioNome'] = $novoUser['nome'];

        var_dump($_SESSION);

        $resultado = $sql->execute();

        if (!$resultado) {
            throw new Exception("Falha ao editar configuração.");
        }

        return $resultado;
    }
}

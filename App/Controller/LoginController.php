<?php

class LoginController
{
    public function index()
    {
        try {
            $clientes = Clientes::selecionaTodos();

            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('login.php');

            $parametros = array();
            $parametros['clientes'] = $clientes;

            $conteudo = $template->render($parametros);
            echo $conteudo;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

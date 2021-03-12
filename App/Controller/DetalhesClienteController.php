<?php

class DetalhesClienteController
{
    public function index($params)
    {
        try {
            $clientes = Clientes::selecionaPorId($params);

            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('DetalhesCliente.php');

            $parametros = array();
            $parametros['codigo'] = $clientes->codigo;
            $parametros['nome'] = $clientes->nome;
            $parametros['razao_social'] = $clientes->razao_social;
            $parametros['cnpj'] = $clientes->cnpj;
            $parametros['data_inclusao'] = $clientes->data_inclusao;

            $conteudo = $template->render($parametros);
            echo $conteudo;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

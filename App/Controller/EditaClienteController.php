<?php

class EditaClienteController
{
    public function index($params)
    {
        try {
            $clientes = Clientes::selecionaPorId($params);

            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('EditaCliente.php');

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

    public function update()
    {
        try {
            Clientes::update($_POST);

            echo '<script>alert("Cliente cadastrado com sucesso!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
        } catch (Exception $e) {
            echo '<script>alert("' . $e->getMessage() . '")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=CadastraCliente"</script>';
        }
    }
}

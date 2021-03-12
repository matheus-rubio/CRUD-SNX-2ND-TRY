<?php

class CadastraClienteController
{
    public function index()
    {
        try {
            $clientes = Clientes::selecionaTodos();

            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('CadastraCliente.php');

            $parametros = array();
            $parametros['clientes'] = $clientes;

            $conteudo = $template->render($parametros);
            echo $conteudo;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function insert()
    {
        try {
            Clientes::insert($_POST);

            echo '<script>alert("Cliente cadastrado com sucesso!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
        } catch (Exception $e) {
            echo '<script>alert("'.$e->getMessage().'")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=CadastraCliente"</script>';
        }
    }
}

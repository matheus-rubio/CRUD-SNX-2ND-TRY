<?php

class EditaConfigController
{
    public function index()
    {
        session_start();
        try {
            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('EditaConfig.php');
            
            
            $parametros = array();
            $parametros['cpf'] = $_SESSION['UsuarioCpf'];
            $parametros['nome'] = $_SESSION['UsuarioNome'];

            $conteudo = $template->render($parametros);
            echo $conteudo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update()
    {
        session_start();
        try {
            Validacao::update($_POST, $_SESSION);

            //echo '<script>alert("Cliente cadastrado com sucesso!")</script>';
            //echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
        } catch (Exception $e) {
            //echo '<script>alert("' . $e->getMessage() . '")</script>';
            //echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=CadastraCliente"</script>';
        }
    }
}

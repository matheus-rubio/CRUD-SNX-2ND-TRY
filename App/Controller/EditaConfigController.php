<?php

class EditaConfigController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
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
        } else {
            echo '<script>alert("Você precisa estar logado para acessar esta página!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
    }

    public function update()
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
            try {
                Validacao::update($_POST, $_SESSION);

                echo '<script>alert("Dados atualizados com sucesso!")</script>';
                echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
            } catch (Exception $e) {
                echo '<script>alert("' . $e->getMessage() . '")</script>';
                echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=EditaConfig"</script>';
            }
        }
        else
        {
            echo '<script>alert("Você precisa estar logado para acessar esta página!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
    }
}

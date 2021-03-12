<?php

class LoginController
{
    public function index()
    {
        try {

            $loader = new \Twig\Loader\FilesystemLoader('App\View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('login.php');

            $conteudo = $template->render();
            echo $conteudo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function login()
    {
        $usuarios = Validacao::usuarios();


        $loader = new \Twig\Loader\FilesystemLoader('App\View');
        $twig = new \Twig\Environment($loader);

        if (!empty($_POST) and (empty($_POST['usuario']) or empty($_POST['senha']))) {
            $template = $twig->load('login.php');
            $conteudo = $template->render();
            echo $conteudo;
            exit;
        } else {
            for($i = 0; $i < sizeof($usuarios); $i++)
            {   
                if ($_POST['usuario'] == $usuarios[$i]->cpf && md5($_POST['senha'])  == $usuarios[$i]->senha) {
                    if (!isset($_SESSION)) session_start();

                    // Salva os dados encontrados na sessão
                    $_SESSION['UsuarioCpf'] = $usuarios[$i]->cpf;
                    $_SESSION['UsuarioNome'] = $usuarios[$i]->nome;
                    $_SESSION['senha'] = $usuarios[$i]->senha;

                    echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
                }
            }
            echo '<script>alert("Login ou senha Incorreto!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
    }
}

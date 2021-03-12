<?php

class LoginController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
            echo '<script>alert("Você já está logado!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=clientes"</script>';
        } else {
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
            for ($i = 0; $i < sizeof($usuarios); $i++) {
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

    public function logout()
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
            session_destroy();
            $error = "Você deslogou.";
            echo $error . '<br><br>';
            echo 'Clique <a href="http://localhost/crud-snx-2nd-try/?pagina=login">aqui</a> para realizar o login.';
        } else {
            echo '<script>alert("Você precisa estar logado para acessar esta página!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
    }
}

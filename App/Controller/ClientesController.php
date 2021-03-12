<?php

class ClientesController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
            try {
                $clientes = Clientes::selecionaTodos();
    
                $loader = new \Twig\Loader\FilesystemLoader('App\View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('Clientes.php');
    
                $parametros = array();
                $parametros['clientes'] = $clientes;
    
                $conteudo = $template->render($parametros);
                echo $conteudo;
    
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        else
        {
            echo '<script>alert("Você precisa estar logado para acessar esta página!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
        
    }

    public function delete($id)
    {
        session_start();
        if (isset($_SESSION['UsuarioCpf'])) {
            try {
                Clientes::delete($id);
    
                echo '<script>alert("Cliente removido com sucesso!")</script>';
                echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
            } catch (Exception $e) {
                echo '<script>alert("'.$e->getMessage().'")</script>';
                echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=Clientes"</script>';
            }
        }
        else
        {
            echo '<script>alert("Você precisa estar logado para acessar esta página!")</script>';
            echo '<script>location.href="http://localhost/crud-snx-2nd-try/?pagina=login"</script>';
        }
    }
}

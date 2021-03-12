<?php

class Core
{
    public function start($urlGet)
    {
        if (isset($urlGet['pagina'])) {
            $controller = ucFirst($urlGet['pagina'] . 'Controller');
        } else {
            $controller = 'LoginController';
        }

        if (isset($urlGet['metodo'])) {
            $metodo = $urlGet['metodo'];
        } else {
            $metodo = 'index';
        }

        if (!class_exists($controller)) {
            $controller = 'ErroController';
        }

        if (isset($urlGet['id']) && $urlGet['id'] != null)
        {
            $id = $urlGet['id'];
        }
        else
        {
            $id = null;
        }

        call_user_func_array(array(new $controller, $metodo), array('id' => $id));
    }
}

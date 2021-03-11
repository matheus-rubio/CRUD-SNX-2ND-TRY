<?php

require_once 'App/Core/Core.php';

require_once 'App/Controller/LoginController.php';
require_once 'App/Controller/ErroController.php';

require_once 'App/Model/Clientes.php';

require_once 'Lib/Database/Connection.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('App/Template/template.php');

ob_start();
    $core = new Core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$template = str_replace('{{area_dinamica}}', $saida , $template);

echo $template;

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>CRUD</title>
</head>

<body>
    <style>
        #barra {
            background-color: black;
        }
        #navButton:hover {
            margin: -5px 0px -5px 0px;
            background-color:gray;
        }
    </style>

    <nav id="barra" class="navbar navbar-hover navbar-expand-lg navbar-dark">
        <div id="barra2" class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li id="navButton" class="nav-item active">
                    <a  class="nav-link" href="http://localhost/crud-snx-2nd-try/?pagina=clientes" onmouseover="this.style.color=''">Clientes <span class="sr-only">(current)</span></a>
                </li>
                <li id="navButton" class="nav-item active">
                    <a  class="nav-link" href="http://localhost/crud-snx-2nd-try/?pagina=EditaConfig">Configurações <span class="sr-only">(current)</span></a>
                </li>
                <li id="navButton" class="nav-item active">
                    <a  class="nav-link" href="http://localhost/crud-snx-2nd-try/?pagina=login&metodo=logout">Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    {{area_dinamica}}
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
    
        $('#cnpjCliente').mask('00.000.000/0000-00', {reverse: true});
        $('#cpf').mask('000.000.000-00', {reverse: true});
    </script>
</body>

</html>
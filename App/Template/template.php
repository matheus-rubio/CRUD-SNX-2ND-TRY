<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>
    <style>
        #navButton:hover {
            color:black;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="navButton" class="nav-link" href="http://localhost/crud-snx-2nd-try/?pagina=clientes" onmouseover="this.style.color=''">Clientes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a id="navButton" class="nav-link" href="http://localhost/crud-snx-2nd-try/?pagina=EditaConfig">Configurações <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a id="navButton" class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    {{area_dinamica}}

</body>

</html>
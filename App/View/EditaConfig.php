<section>
    <style>
        .login-dark {
            height: 1000px;
            background-size: cover;
            position: relative;
        }

        .login-dark form {
            max-width: 400px;
            width: 90%;
            background-color: black;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 25%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }

        .login-dark form .btn-primary {
            background: #3475cb;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            background: #214a80;
            outline: none;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
    <div class="login-dark">
        <form method="POST" action="?pagina=EditaConfig&metodo=update" class="teste">

            <div class="form-group">
                <label for="cpf">Cpf</label>
                <input type="text" value="{{cpf}}" class="form-control" id="cpf"  name="cpf" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" value="{{nome}}" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Informações</button>

        </form>
    </div>

</section>
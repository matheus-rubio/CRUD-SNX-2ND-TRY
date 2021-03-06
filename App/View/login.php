<section>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }



        .main-head {
            height: 150px;
            background: #FFF;

        }

        .sidenav {
            height: 100%;
            background-color: #000;
            overflow-x: hidden;
            padding-top: 20px;
        }


        .main {
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
        }

        @media screen and (max-width: 450px) {
            .login-form {
                margin-top: 10%;
            }

            .register-form {
                margin-top: 10%;
            }
        }

        @media screen and (min-width: 768px) {
            .main {
                margin-left: 40%;
            }

            .sidenav {
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }

            .login-form {
                margin-top: 80%;
            }

            .register-form {
                margin-top: 20%;
            }
        }


        .login-main-text {
            margin-top: 20%;
            padding: 60px;
            color: #fff;
        }

        .login-main-text h2 {
            font-weight: 300;
        }

        .btn-black {
            background-color: #000 !important;
            color: #fff;
        }

        #barra {
            visibility: hidden;
        }
    </style>
    <div>

        <div class="sidenav">
            <div class="login-main-text">
                <h2>CRUD SNX</h2>
                <p>FAÇA O LOGIN PARA UTILIZAR A APLICAÇÃO</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="?pagina=login&metodo=login" method="post">
                        <div class="form-group">
                            <label>Cpf</label>
                            <input type="text" class="form-control" id="cpf" placeholder="Usuário" name="usuario">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-black">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
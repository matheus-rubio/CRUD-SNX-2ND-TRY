<section>
    <div class="container">
        <form method="POST" action="?pagina=CadastraCliente&metodo=insert" class="teste">
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="razaoSocial">Razão social</label>
                <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="cnpjCliente">CNPJ</label>
                <input type="text" class="form-control" id="cnpjCliente" name="cnpjCliente">
            </div>
            <div class="form-group form-check">
            </div>
            <button type="submit" class="btn btn-primary" onclick="msg()">Cadastrar</button>

        </form>

    </div>
</section>
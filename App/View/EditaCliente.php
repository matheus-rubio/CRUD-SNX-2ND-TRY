<section>
<div class="container">
        <form method="POST" action="?pagina=EditaCliente&metodo=update" class="teste">
        
        <input type="hidden" value="{{codigo}}" name="codigoCliente">
        <div class="form-group">
            <label for="nomeCliente">Nome</label>
            <input type="text" value="{{nome}}" class="form-control" name="nomeCliente" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="razaoSocial">Razão Social</label>
            <input type="text" value="{{razao_social}}" class="form-control" id="razaoSocial" name="razaoSocial" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="cnpjCliente">CNPJ</label>
            <input type="text" value="{{cnpj}}" class="form-control" id="cnpjCliente" name="cnpjCliente" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Informações</button>
        
        </form>
    </div>

</section>
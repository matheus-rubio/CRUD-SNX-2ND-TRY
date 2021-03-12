<section>
<div class="container">
        <form method="POST" action="?pagina=EditaConfig&metodo=update" class="teste">
    
        <div class="form-group">
            <label for="nomeCliente">Cpf</label>
            <input type="text" value="{{cpf}}" class="form-control" name="cpf" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="razaoSocial">Nome</label>
            <input type="text" value="{{nome}}" class="form-control" id="razaoSocial" name="nome" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Informações</button>
        
        </form>
    </div>

</section>
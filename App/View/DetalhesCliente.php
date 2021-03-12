<section>
    <style>
        #detalhes, #botao {
            
            margin-top: 15px;
        }
    </style>
    <div  class="col-4 m-auto">
        <ul id="detalhes" class="list-group">
            <li class="list-group-item bg-dark text-white">Nome: {{nome}}</li>
            <li class="list-group-item">Razão Social: {{razao_social}}</li>
            <li class="list-group-item">CNPJ: {{cnpj}}</li>
            <li class="list-group-item">Data de criação: {{data_inclusao}}</li>
        </ul>
        <a id="botao" class="btn btn-success" href="http://localhost/crud-snx-2nd-try/?pagina=clientes">
            Voltar
        </a>
    </div>
</section>
<section>
<table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Razao Social</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Data da Inclusão</th>
              </tr>
            </thead>
            <tbody>
                {% for cliente in clientes %}
                    <tr>
                        <th scope="row">{{cliente.codigo}}</th>
                        <td>{{cliente.nome}}</td>
                        <td>{{cliente.razao_social}}</td>
                        <td>{{cliente.cnpj}}</td>
                        <td>{{cliente.data_inclusao}}</td>
                        <td>
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=DetalhesCliente&id={{cliente.codigo}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        </td>
                        <td>
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=editaCliente&id={{cliente.codigo}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        </td>
                        <td>
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=clientes&metodo=delete&id={{cliente.codigo}}" class="jsDel">
                            <button class="btn btn-danger" onsubmit="return false;">Deletar</button>
                        </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
          </table>
          <a href="http://localhost/crud-snx-2nd-try/?pagina=CadastraCliente" class="btn btn-primary">Novo Cliente</a>
</section>
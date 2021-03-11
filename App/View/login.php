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
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=visualizar&id={{cliente.codigo}}">
                            <button class="btn btn-dark">Visualisar</button>
                        </a>
                        </td>
                        <td>
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=editar&id={{cliente.codigo}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        </td>
                        <td>
                        <a href="http://localhost/crud-snx-2nd-try/?pagina=deletar&id={{cliente.codigo}}" class="jsDel">
                            <button class="btn btn-danger" onsubmit="return false;">Deletar</button>
                        </a>
                        </td>
                        
                    </tr>
                {% endfor %}
            </tbody>
          </table>
</section>
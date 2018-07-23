<h1>Listagem dos Produtos</h1>

<table>

   <tr>
     <th>Nome</th>  
     <th>Descricao</th>   
   </tr>
    @foreach($produtosConsulta as $exibeProdutos)

   <tr>
     <td>{{$exibeProdutos->nome}}</td>
     <td>{{$exibeProdutos->descricao}}</td>


   </tr>

  @endforeach

</table>
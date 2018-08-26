<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produtos;

class ProdutosController extends Controller
{
    //
   private $produtos;

  public  function __construct(Produtos $produtos) {
    $this->produtos = $produtos;

}

    

   public function index(){

    //faz a consulta no banco
    $produtosConsulta = $this->produtos->all(); 
    

    return view('Painel.Produtos.index',compact('produtosConsulta'));
   }

   public function testes (){

  //  $prod = $this->produtos;

    /*$prod->nome = 'caderno';
    $prod->numero = 12321;
    $prod->ativo = 1;
   // $prod->categoria = 'eletronico';
    $prod->descricao = 'Material para  escola';



     $insert = $prod->save();

      if($insert == true){

      return 'inserido com sucesso';

      }else{

        return 'falha ao inserir';
      }

    */

    /*

     $insert =  $this->produtos->create([

        'nome' => 'caneta',
        'numero' => '125',
        'ativo' => 1,
      
       // 'categoria' => 'Material diverso',
        'descricao' => 'item escolar',
         
        
        
     ]);
      //esta é uma forma mais classica

      if($insert == true){

        return "inserido com sucesso   {$insert->id}";
  
        }else{
  
          return 'falha ao inserir';
        }
  
     */

    //método que retorna o item pelo id
    //método de update antigo
    /* $prod = $this->produtos->find(5);

      $prod->nome = 'update';
      $prod->numero=79789;
      $prod->ativo = 1;

      $update = $prod->save();

      if($update ==true){

         return 'alterado com sucesso';

         }else{

         return 'falha ao alterar ';

      }*/

   //exemplo dois pegando pelo id da tablea
    /*$prod = $this->produtos->find(6);

    $update = $prod->update([
       'nome' =>'update teste',
       'numero' =>1234,
       'ativo'  =>1,


      ]);
      if($update ==true){

        return 'alterado com sucesso';

        }else{

        return 'falha ao alterar ';

     }
     */

  //exemplo 3 quando nao se consegue pegar pelo id
  //pegando de outra tabela 
    /*$prod = $this->produtos->where('numero',12321);

    $update = $prod->update([
       'nome' =>'update teste 3 laravel',
       'numero' =>1234,
       'ativo'  =>1,


      ]);
      if($update ==true){

        return 'alterado com sucesso';

        }else{

        return 'falha ao alterar ';

     }

       */
      //delete
      $prod = $this->produtos->find(3);
      $delete = $prod->delete();

      if($delete){

        return  'deletado com sucesso';
      }else{

        return 'falha na hora de apagar';
      }




   
  }

}

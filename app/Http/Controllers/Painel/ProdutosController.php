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
  

   
  }

}

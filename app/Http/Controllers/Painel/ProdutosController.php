<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produtos;

class ProdutosController extends Controller
{
    //
   private $produtos;

   function __construct($produto) {
    $this->produto = $produto;
}

    

   public function index(Produtos $produtos){

    //faz a consulta no banco
    $produtosConsulta = $produtos->all(); 
    

    return view('Painel.Produtos.index',compact('produtosConsulta'));
   }

   public function testes (){


    $prod = $this->produto;
    
    $prod->nome = 'caderno';
    $prod->numero = 12321;
    $prod->ativo = 1;
    $prod->categoria = 'eletronico';
    $prod->descricao = 'Material para  escola';


    return 'testando ricardo =]  salvo';


   }



}



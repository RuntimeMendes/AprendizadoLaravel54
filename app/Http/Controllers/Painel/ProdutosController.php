<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produtos;

class ProdutosController extends Controller
{
    //

   public function index(Produtos $produtos){

    //faz a consulta no banco
    $produtosConsulta = $produtos->all(); 
    

    return view('Painel.Produtos.index',compact('produtosConsulta'));
   }




}

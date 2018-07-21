<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //
   public function index(){

    $var1 = '12';

    $arrayData = ['oi','ricardo','mendes'];


     
    return view('site.home.index',compact('var1','arrayData'));

   }


   public function contato(){
     
    return view('contact.index');

   }

   

   public function categoria($id){
     
    return 'Olá contato!'.$id;
  //test
   }

   public function categoriaOp($id=1){
     
    return 'Olá contato!'.$id;
 
   }








}

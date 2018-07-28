<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    //lista branca especifica quais campos posso inserir nas colunas de uma tabela bd

 protected $fillable = [
   'nome','numero','ativo', 'imagem','categoria','descricao',

 ];




}

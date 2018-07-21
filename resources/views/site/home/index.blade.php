
@extends('site.template.template1')
   @section('content')

   <h1>Home page do Site</h1>

    @if($var1 =='123')

      <p>é igual</p>


     @else

       <p>é diferente</p> 

    @endif

    @for($i=1;$i<=$var1;$i++)

     <p>repete = {{$i}}</p>

    @endfor

    @if(count($arrayData)>0)

       @foreach($arrayData as $array)

    <p>Exibe foreach  {{$array}}</p>   

    @endforeach

    @else

    <p>Não existem itens na lista</p>

    @endif

    @forelse($arrayData as $array)
    <p>Exibe forelse  {{$array}}</p> 
    @empty
    <p>Não existem itens na lista</p> 

    @endforelse

   @endsection





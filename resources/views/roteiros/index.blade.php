@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="list-group">
        @if ($search)
        <h5>Resultado da pesquisa por eventos em {{$search}}</h5>
        @else
        <h5>Todos Roteiros</h5>
        @endif
        
        @foreach ($roteiros as $item)
        
        <div class="card" style="width: 18rem;">
          <a href="{{ route('roteiros.show', ['prisw'=>$item->id])}}" class="list-group-item list-group-item-action">
            <img src="{{ asset('storage/'.$item->fotos[0]->link_photo)}}" class="card-img-top" alt="...">
          </a>
          <div class="cart-title"><h5 class="mb-1">{{$item->local}}</h5></div>
          
          
          <div class="card-body">
            <h5 class="mt-0">{{$item->estado}}</h5>
            {{$item->descricao}} <br>
            <div class="datas">
              data de partida {{$item->data_partida}}
            </div>
          </div>
        </div>
        
        @endforeach
      </ul>
      
    </div>
  </div>
</div>
@endsection

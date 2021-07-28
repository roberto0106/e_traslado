@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="card-deck">
            <div class="card">
              <img class="rounded mx-auto d-block icon_home" src="{{ asset('img/guias.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Guias</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <p class="card-text"><a href="{{ route('guias.index')}}" class="btn btn-primary btn-block">Ver guias</a></p>
            </div>
            </div>
            <div class="card">
              <img class="rounded mx-auto d-block icon_home" src="{{ asset('img/roteiros_icon.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Roteiros</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <p class="card-text"><a href="{{ route('roteiros.index')}}" class="btn btn-primary btn-block">Ver os roteiros</a></p>
            </div>
            </div>
            <div class="card">
              <img class="rounded mx-auto d-block icon_home" src="{{ asset('img/favoritos.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Meus Favoritos</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <p class="card-text"><a href="{{ route('guias.index')}}" class="btn btn-primary btn-block">Ver meus favoritos</a></p>
            </div>
            </div>
          </div>


    </div>
</div>
@endsection

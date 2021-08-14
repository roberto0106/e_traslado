@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="titulo_banner">Encontre seu próximo destino</h1>
    {!! Form::open(['route'=>'data_roteiro','method'=>'get']) !!} 
    <div class="row justify-content-center">
      <div class="bloco_search">
        <div class="form-check form-check-inline">
          <div class="container text-center">
            <p>Data: <input type="text" id="calendario" name="data" autocomplete="off"/></p>
          </div>  
          <button class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    {!! Form::close() !!}

 
   </div>

  
  </div>
</div>


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

@section('scripts')

<script>
  $(function() {
 
  let array; 
    
  axios.get('http://etraslado.herokuapp.com/get_roteiros/')
  .then(function (response) {
    array = response.data
    $('#calendario').datepicker({
          beforeShowDay: function(date){
              var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
              return [ array.indexOf(string) > -1 ]
          }
      });
  });

    

      


  });

  </script>

@endsection
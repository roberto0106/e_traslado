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
            <p>Data: <input type="text" id="calendario" name="data" autocomplete="off" class="form-control"/></p>
          </div>  
          <button class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    {!! Form::close() !!}

 
   </div>

  
  </div>
</div>


   <div class="row justify-content-center">
      <div class="col-4">
        <iframe src="https://www.meteoblue.com/pt/tempo/widget/three?geoloc=detect&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 460px; height: 586px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/pt/tempo/semana/index?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>

      </div>
    <div class="col-8">
     
    </div>


@endsection

@section('scripts')

<script>
  $(function() {
 
  let array; 
    
  axios.get('get_roteiros/')
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
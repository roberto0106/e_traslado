@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1>{{$roteiros->local}}</h1>
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                 
                  @foreach ($roteiros->fotos as $item)
                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/'.$item->link_photo)}}" class="d-block w-100" alt="...">
                  </div>
                  @endforeach


                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>     
              <hr>
              <h1>Informações</h1>
             
                   <ul class="list-group">
                    <li class="list-group-item">id: {{$roteiros->id}}</li>
                    <li class="list-group-item">estado: {{$roteiros->estado}}</li>
                    <li class="list-group-item">cidade: {{$roteiros->cidade}}</li>
                    <li class="list-group-item">local: {{$roteiros->local}}</li>
                    <li class="list-group-item">duração: {{$roteiros->duracao}}</li>
                  </ul>
              <hr>
              
              <h1>Checkout</h1>

                <!-- INICIO DO BOTAO PAGSEGURO -->
                <a href="https://pag.ae/7XmjvAZYL/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a>
                <!-- FIM DO BOTAO PAGSEGURO -->

        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(function () {
    $('.carousel').carousel();
});
</script>

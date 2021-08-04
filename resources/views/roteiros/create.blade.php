@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">roteiros</div>

                <div class="card-body">
                  {!!  Form::open(['route' => 'roteiros.store']) !!}

                  <div class="row">
                    <div class="col-6" style="border-right: 1px solid #CED4DA">
                      <div class="form-group">
                        {!! Form::label('estado', "estado") !!}
                        {!! Form::text('estado', '', ['class'=>'form-control']) !!}
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        {!! Form::label('cidade', "cidade") !!}
                        {!! Form::text('cidade', '', ['class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6" style="border-right: 1px solid #CED4DA">
                    <div class="form-group">
                      {!! Form::label('local', "local") !!}
                      {!! Form::text('local', '', ['class'=>'form-control']) !!}
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                      {!! Form::label('fotos', "fotos") !!}
                      {!! Form::file('fotos',['multiple']) !!}
                    </div>
                    </div>
                  </div>
           
                  <div class="form-group">
                  {!! Form::label('descrição', "descrição") !!}
                  {!! Form::textarea('descricao', '', ['class'=>'form-control','rows'=>'3']) !!}
                 </div>

                 <div class="row">
                   <div class="col-6" style="border-right: 1px solid #CED4DA">
                    <div class="form-group">
                      {!! Form::label('data_partida', "data de partida") !!}
                      {!! Form::date('data_partida', '', ['class'=>'form-control']) !!}
                    </div>
  
                    <div class="form-group">
                      {!! Form::label('hora_partida', "horário da partida") !!}
                      {!! Form::time('hora_partida', '', ['class'=>'form-control']) !!}
                    </div>
                   </div>
                   <div class="col-6">
                    <div class="form-group">
                      {!! Form::label('data_retorno', "data de retorno") !!}
                      {!! Form::date('data_retorno', '', ['class'=>'form-control']) !!}
                    </div>
  
                    <div class="form-group">
                      {!! Form::label('hora_retorno', "horário da retorno") !!}
                      {!! Form::time('hora_retorno', '', ['class'=>'form-control']) !!}
                    </div>
                   </div>

                 </div>

                 <div class="card-footer">
                  {!! Form::submit('enviar', ['class'=>'form-control']) !!}
                  {!! Form::close() !!}   
                </div>

                </div>

               
                 
            </div>
        </div>
    </div>
</div>
@endsection

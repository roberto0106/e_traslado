@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">guias</div>

                <div class="card-body">
                  {!!  Form::open(['route' => 'guias.store']) !!}

                  <div class="form-group">
                    {!! Form::label('nome', "nome") !!}
                    {!! Form::text('nome', '', ['class'=>'form-control']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('sobrenome', "sobrenome") !!}
                    {!! Form::text('sobrenome', '', ['class'=>'form-control']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('especialidades', "especialidades") !!}
                    {!! Form::text('especialidades', '', ['class'=>'form-control']) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('telefone', "telefone") !!}
                  {!! Form::number('telefone', '', ['class'=>'form-control']) !!}
                 </div>

                 <div class="form-group">
                  {!! Form::label('roteiros', "roteiros") !!}
                  {!! Form::select('roteiros', $roteiros, 'selecione', ['class'=>'form-control','multiple']) !!}                 
                </div>

                  {!! Form::submit('enviar', ['class'=>'form-control']) !!}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

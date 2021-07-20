@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">roteiros</div>

                <div class="card-body">
                  {!!  Form::open(['route' => 'roteiros.store']) !!}

                  <div class="form-group">
                    {!! Form::label('estado', "estado") !!}
                    {!! Form::text('estado', '', ['class'=>'form-control']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('cidade', "cidade") !!}
                    {!! Form::text('cidade', '', ['class'=>'form-control']) !!}
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('local', "local") !!}
                    {!! Form::text('local', '', ['class'=>'form-control']) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('descrição', "descrição") !!}
                  {!! Form::textarea('descricao', '', ['class'=>'form-control']) !!}
                 </div>

                  {!! Form::submit('enviar', ['class'=>'form-control']) !!}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

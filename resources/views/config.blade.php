@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">configurações</div>

                <div class="card-body">
                    <a href="{{route('roteiros.create')}}">cadastrar roteiros</a><br>
                    <a href="{{route('guias.create')}}">cadastrar guias</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
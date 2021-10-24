@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">guias</div>

                <div class="card-body">
                
                    @foreach ($guias as $item)
                        {{$item}}
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

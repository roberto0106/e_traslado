@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
               

                <div class="list-group">
                    @foreach ($roteiros as $item)
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$item->local}}</h5>
                        <small>3 days ago</small>
                      </div>
                      <div class="media">
                        <img src="{{$item->foto}}" class="mr-3 img_roteiros" alt="...">
                        <div class="media-body">
                          <h5 class="mt-0">{{$item->estado}}</h5>
                            {{$item->descricao}}
                        </div>
                      </div>
                    </a>
                   @endforeach
              </ul>

        </div>
    </div>
</div>
@endsection

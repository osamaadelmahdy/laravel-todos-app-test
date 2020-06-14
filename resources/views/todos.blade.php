@extends('layout')

@section('title','Todos')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
        <div class="card-header text-center">
            <h1>All todos</h1>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($todos as $item)
                    <li class="list-group-item">
                        {{$item->title}}
                        <span class="float-right ml-2 text-danger"> <i class="fa fa-trash-o"></i></span>
                        <span class="float-right ml-2 text-primary "> <i class="fa fa-pencil-square-o"></i></span>
                    <span class="float-right text-info"> <a href="/todos/{{$item->id}}"><i class="fa fa-eye" ></i></a></span>
                    </li>
                @endforeach
            
            </ul>
        </div>
        
    </div>
            </div>
        </div>
    </div>
    
@endsection
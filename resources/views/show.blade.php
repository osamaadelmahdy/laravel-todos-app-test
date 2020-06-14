@extends('layout')

@section('title',$todoItem->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3"> 
        <h1 class="text-center mt-5">{{$todoItem->title}}</h1>

        <div class="card">
            <div class="card-header">
                <span>Details</span>
                <span class="badge badge-warning float-right">
                    {{boolval($todoItem->completed)? 'Completed' : 'Non completed'}}
                </span>
            </div>
                <div class="card-body">
                    <p class="card-text">{{$todoItem->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
    

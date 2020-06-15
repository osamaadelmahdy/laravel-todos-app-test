@extends('layout')

@section('title','Edit todo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5"> 
        

        <div class="card">
            <div class="card-header">
                <h1 class="text-center ">Edit todo</h1>
            </div>
                <div class="card-body">
                <form action="/todos/{{$todoItem->id}}" method="POST">
                        @csrf

                        <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{$todoItem->title}}" class="@error('title') is-invalid @enderror">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                        <textarea class="form-control" name="description" class="@error('description') is-invalid @enderror">{{$todoItem->description}}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="width: 40%">Edit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
    

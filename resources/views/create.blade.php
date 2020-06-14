@extends('layout')

@section('title','Create todo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5"> 
        

        <div class="card">
            <div class="card-header">
                <h1 class="text-center ">Create todo</h1>
            </div>
                <div class="card-body">
                    <form action="/create" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Add Todo">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="description" placeholder="Add discription"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="width: 40%">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
    

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
                    @if (session()->has('delete'))
                    <div class="alert alert-success">
                        <p>
                            {{session()->get('delete')}}
                        </p>
                    </div>
                    @endif
                    <ul class="list-group">
                        @forelse ($todos as $item)
                        <li class="list-group-item ">
                            @if($item->completed==1) <del> @endif
                                {{$item->title}}
                                @if($item->completed==1) </del> @endif
                            <span class="float-right ml-2 "> <a href="/todos/{{$item->id}}/delete"><i
                                        class="fa fa-trash-o text-danger"></i></a></span>
                            <span class="float-right ml-2 "> <a href="/todos/{{$item->id}}/edit"><i
                                        class="fa fa-pencil-square-o text-primary"></i></a></span>
                            <span class="float-right ml-2"> <a href="/todos/{{$item->id}}"><i
                                        class="fa fa-eye text-info"></i></a></span>
                            <span class="float-right "> <a href="/todos/{{$item->id}}/completed"><i
                                        class="fa fa-check-square-o text-success"></i></a></span>
                        </li>
                        @empty
                        <p class="text-center">No todos. </p>
                        @endforelse

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\todos;

class todosController extends Controller
{
    public function index()
    {
        $all = todos::all();
        return view("todos")->with('todos',$all);
    }
    public function show($id)
    {
        $show = todos::find($id);
        return view("show")->with('todoItem',$show);
    }
    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        $todo = new todos();
        $todo->title = $request->title;
        $todo->description = $request->description; 
        $todo->save();
        return redirect('/todos');
    }
}

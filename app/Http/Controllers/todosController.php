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
        $validatedData = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $todo = new todos();
        $todo->title = $request->title;
        $todo->description = $request->description; 
        $todo->save();
        return redirect('/todos');
    }
    public function edit($id)
    {
        $show = todos::find($id);
        return view("edit")->with('todoItem',$show);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $todo = todos::find($id);
        $todo->title = $request->title;
        $todo->description = $request->description; 
        $todo->save();
        return redirect('/todos');
    }

    public function destroy(Request $request, $id)
    {
        echo $request;

        $todo = todos::find($id);
        $todo->delete();
        $request->session()->flash('delete', 'Todo deleted. ');
        return redirect('/todos');
    }
    public function completed($id)
    {

        $todo = todos::find($id);
        $todo->completed = true;
        $todo->save();
        return redirect('/todos');
    }

}

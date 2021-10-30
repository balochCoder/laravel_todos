<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        Todo::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        Session::flash('success', 'Todo created successfully');
        return redirect(route('todos'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $todo->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        Session::flash('success', 'Todo updated successfully');
        return redirect(route('todos'));
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        Session::flash('success', 'Todo deleted successfully');
        return redirect(route('todos'));
    }
    public function completed(Todo $todo)
    {
        $todo->update([
            'completed'=>true
        ]);
        Session::flash('success', 'Todo completed successfully');
        return redirect(route('todos'));
    }
}

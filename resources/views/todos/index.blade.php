@extends('layouts.app')
@section('title')
    Todos List
@endsection

@section('content')
    <h1 class="text-center my-5">TODOS PAGE</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card card-default">
        <div class="card-header">
            Todos
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach ($todos as $todo)
                    <li class="list-group-item">{{ $todo->name }}
                        <form action="{{ route('todos.completed', $todo->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if (!$todo->completed)
                                <input type="submit" class="btn btn-warning btn-sm float-right text-white"
                                    value="Complete" />
                            @endif
                            <a href="{{ route('todos.show', $todo->id) }}"
                                class="btn btn-primary btn-sm float-right mr-2">View</a>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

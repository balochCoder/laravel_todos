@extends('layouts.app')
@section('title')
    Single Todo: {{ $todo->name }}
@endsection

@section('content')
    <h1 class="text-center my-5">{{ $todo->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            <div>
                <form action="{{ route('todos.delete', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-info my-2 btn-sm text-white">Edit</a>
                    <input type="submit" class="btn btn-danger my-2 btn-sm" value="Delete" />

                </form>
            </div>
        </div>
    </div>

@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Todos App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('todos') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('todos')}}">Todos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->is('todos/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('todos.create')}}">Create Todo<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

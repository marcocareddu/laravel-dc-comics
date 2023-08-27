<header class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('comics.list') }}">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ route('comics.create') }}">+</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

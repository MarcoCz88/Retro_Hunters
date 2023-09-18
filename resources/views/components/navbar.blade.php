<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">RH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link-custom" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-custom" aria-current="page" href="{{ route('announcement.index') }}">Tutti gli
                        annunci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-custom" href="#">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Generi
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item link-custom" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @guest
                <form action="{{ route('register') }}" method="GET">
                    <li class="nav-item">
                        <button class="btn btn-primary mx-2"> Registrati</button>
                    </li>
                </form>
                <form action="{{ route('login') }}" method="GET">
                    <li class="nav-item">
                        <button class="btn btn-primary mx-2">Login </button>
                    </form>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link link-custom" href="{{ route('announcement.create') }}">Inserisci articolo</a>
                </li>
                
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn btn-sm link-custom" href="{{route('revisor.index')}}">Area Revisioni
                        <span class="badge rounded-pill bg-danger">
                            {{App\Models\Announcement::toBeRevisionedCount()}}
                            <span class="visually-hidden">messaggi non letti</span>
                        </span>
                    </a>
                </li>    
                @endif
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="nav-item">
                        <button class="btn btn-primary">Logout</button>
                    </li>
                </form>
            @endauth
                
                
            </ul>
        </div>
    </div>
</nav>

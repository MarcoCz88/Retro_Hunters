<nav class="navbar navbar-expand-lg navbar-custom py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">RH</a>
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
                    <a class="nav-link link-custom" aria-current="page" href="{{ route('announcement.index') }}">Tutti
                        gli
                        annunci</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link link-custom" href="{{ route('announcement.create') }}">Inserisci articolo</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link link-custom dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Generi
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item link-custom"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

            </ul>
            @auth
                <p class="d-none">
                    {{ $counter = App\Models\Announcement::toBeRevisionedCount() }}
                </p>
                <li class="nav-item dropdown ms-auto mx-5">
                    <a class="nav-link link-custom dropdown-toggle mx-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        @if ($counter > 0)
                            <span class="badge rounded-pill bg-danger">
                                {{ App\Models\Announcement::toBeRevisionedCount() }}
                                <span class="visually-hidden">messaggi non letti</span>
                            </span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm link-custom" href="{{ route('revisor.index') }}">Area
                                    Revisioni
                                    <span class="badge rounded-pill bg-danger">
                                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">messaggi non letti</span>
                                    </span>
                                </a>
                            </li>
                        @endif
                        <hr class="mx-2">
                        <li class="nav-item mx-2">
                            <a href="/logout"
                                onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a>
                        </li>
                        <form id="form-logout" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endauth
            @guest
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link link-custom dropdown-toggle mx-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Visitatore
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item mx-2">
                            <a href="/login"
                                onclick="event.preventDefault();getElementById('form-login').submit()">Login</a>
                        </li>
                        <form id="form-login" action="{{ route('login') }}" method="GET">
                        </form>
                        <li class="nav-item mx-2">
                            <a href="/register"
                                onclick="event.preventDefault();getElementById('form-register').submit()">Registrati</a>
                        </li>
                        <form id="form-register" action="{{ route('register') }}" method="GET">
                        </form>
                    </ul>
                </li>
            @endguest
        </div>
    </div>
</nav>

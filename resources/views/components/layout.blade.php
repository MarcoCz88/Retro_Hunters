<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Retro Hunters' }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="body-custom">
    <x-navbar />
<<<<<<< HEAD
    
=======
>>>>>>> a020d1e925c2d76e78fd2c929f8e6d5a586d0094
    <header>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
    </header>
<<<<<<< HEAD

=======
>>>>>>> a020d1e925c2d76e78fd2c929f8e6d5a586d0094
    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

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

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{ $slot }}

    <x-footer />
    @livewireScripts
 </body>

</html>

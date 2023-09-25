<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retro Hunters Support</title>
</head>
<body>
    <div>
        <h2>Un utente si è candidato al ruolo di revisore</h2>
        <h3>I suoi dati sono: </h3>
        <p>Nome: {{$user->name}}</p>
        <p>Cognome: {{$user->surname}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Contatto telefonico: {{$user->phone}}</p>
        <p>Messaggio: {{$user->message}}</p>
        <p>Se vuoi renderlo revisore clicca qui</p>
        <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>
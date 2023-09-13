<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-3">{{$announcement->title}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <img src="https://picsum.photos/500" alt="{{$announcement->title}}">
            </div>
            <div class="col-5">
                <p>Genere: {{$announcement->category->name}}</p>
                <p>Sviluppatore: {{$announcement->developer}}</p>
                <p>Pubblicato da: {{$announcement->publisher}}</p>
                <p>Prezzo: {{$announcement->price}}</p>
                <p>{{$announcement->body}}</p>
            </div>
            <div class="col-10">
                <p>Creato da: {{$announcement->user->name }} il {{$announcement->created_at->format('d/m/Y')}} </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-carosel-show />
        </div>
    </div>
</x-layout>
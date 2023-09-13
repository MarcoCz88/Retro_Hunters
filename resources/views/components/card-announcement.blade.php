<div class="card m-3" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="{{ $announcement->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $announcement->title }}</h5>
        <p class="card-text">{{ $announcement->category->name }}</p>
        <p class="card-text text-truncate">{{ $announcement->body }}</p>
        <p class="card-text">Prezzo: {{ $announcement->price }}€</p>
        <p class="card-text">Sviluppato da: {{ $announcement->developer }}</p>
        <p class="card-text">Pubblicato da: {{ $announcement->publisher }}</p>
        <span class="card-footer">
            <p class="card-text">Caricato da: {{ $announcement->user->name ?? '' }} il
                {{ $announcement->created_at->format('d/m/Y') }}</p>
        </span>
        <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Visualizza</a>
    </div>
</div>

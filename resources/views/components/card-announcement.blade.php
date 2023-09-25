{{-- <div class="card m-3" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="{{ $announcement->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $announcement->title }}</h5>
        <p class="card-text">{{ $announcement->category->name }}</p>
        <p class="card-text text-truncate">{{ $announcement->body }}</p>
        <p class="card-text">{{ __('ui.price')}} : {{ $announcement->price }}€</p>
        <p class="card-text">{{ __('ui.developer')}} : {{ $announcement->developer }}</p>
        <p class="card-text">{{ __('ui.published')}} : {{ $announcement->publisher }}</p>
        <span class="card-footer">
            <p class="card-text">Caricato da: {{ $announcement->user->name ?? '' }} il
                {{ $announcement->created_at->format('d/m/Y H:i') }}</p>
        </span>
        <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Visualizza</a>
    </div>
</div> --}}

<a href="{{ route('announcement.show', compact('announcement')) }}">
    <div class="card">
        <img class="btnGB" src="/media/plus.png">
        <div class="btnGB2"></div>
        <div class="btnGB2_2"></div>
        <div class="mx-auto">
            <div class="card__img"
                style="background-image: url('{{ !$announcement->images()->get()->isEmpty()? Storage::url($announcement->images()->first()->path): Storage::url('images/default.jpg') }}');background-size:cover">
            </div>
        </div>
        <div class="card__title" >{{ $announcement->title }}</div>
        <div class="card__subtitle">
            <a href="{{ route('platformIndex', compact('announcement')) }}">{{ $announcement->platform }}</a>
            -
            <a href="{{ route('categoryIndex', $announcement->category->id) }}">{{ $announcement->category->name }}</a>
        </div>
        <hr>

        <div class="card__wrapper">
            <div class="card__wrapper_info">
                <div class="card__subtitle card__wrapper_info">{{ $announcement->developer }} </div>
                <div class="card__subtitle card__wrapper_info">{{ $announcement->publisher }} </div>
            </div>
            <div class="card__price">{{ $announcement->price }}€</div>
            {{-- <div class="card__counter">
                <button class="card__btn">-</button>
                <div class="card__counter-score">2</div>
                <button class="card__btn card__btn-plus">+</button>
            </div> --}}
        </div>
    </div>
</a>
{{-- <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : Storage::url('images/default.jpg')}}" class="card-img-top" alt="{{ $announcement->title }}"> --}}

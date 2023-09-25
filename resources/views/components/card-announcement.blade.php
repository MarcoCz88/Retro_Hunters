<a href="{{ route('announcement.show', compact('announcement')) }}">
    <div class="card">
        <img class="btnGB" src="/media/plus.png">
        <div class="btnGB2"></div>
        <div class="btnGB2_2"></div>
        <div class="mx-auto">
            {{-- {{dd(Storage::url($announcement->images()->first()->getUrl(300, 300)))}} --}}
            <div class="card__img"
                style="background-image: url('{{ $announcement->images()->get()->isNotEmpty() ? Storage::url($announcement->images()->first()->getUrl(300, 300)) : Storage::url('images/default.jpg') }}');background-size:cover">
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

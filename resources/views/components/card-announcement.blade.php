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

<div class="card">
    <img class="btnGB" src="/media/plus.png" alt="">
    <div class="btnGB2"></div>
    <div class="btnGB2_2"></div>
    <div class="card__wrapper">
        {{-- <div class="card__back"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 24" height="24"
                width="14">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#000" d="M12 2L2 12L12 22">
                </path>
            </svg>
        </div> --}}
        <div class="card__menu">
            <a href="{{ route('announcement.show', compact('announcement')) }}">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="29" viewBox="0 0 29 14" height="14"
                    fill="none">
                    <path fill="#000"
                        d="m16.5714 9.16667h10.3572c.5493 0 1.0762.22827 1.4647.6346s.6067.95743.6067 1.53203c0 .5747-.2182 1.1258-.6067 1.5321s-.9154.6346-1.4647.6346h-10.3572c-.5493 0-1.0762-.2283-1.4647-.6346s-.6067-.9574-.6067-1.5321c0-.5746.2182-1.1257.6067-1.53203s.9154-.6346 1.4647-.6346zm-14.49997-8.66667h24.85717c.5493 0 1.0762.228273 1.4647.6346.3885.40633.6067.95743.6067 1.53207 0 .57463-.2182 1.12573-.6067 1.53206s-.9154.6346-1.4647.6346h-24.85717c-.54938 0-1.076254-.22827-1.464722-.6346s-.606708-.95743-.606708-1.53206c0-.57464.21824-1.12574.606708-1.53207.388468-.406327.915342-.6346 1.464722-.6346z">
                    </path>
                </svg> --}}
            </a>
        </div>
    </div>
    <div class="mx-auto">
        <div class="card__img" style="background-image: url('{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : Storage::url('images/default.jpg')}}');background-size:cover">
            {{-- <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : Storage::url('images/default.jpg')}}" class="card-img-top" alt="{{ $announcement->title }}"> --}}
        </div>
    </div>
    <div class="card__title" style="min-height: 75px; color:#0053FF">{{ $announcement->title }}</div>
    <div class="card__subtitle">{{ $announcement->category->name }}</div>
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

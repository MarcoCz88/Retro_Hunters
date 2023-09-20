<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-3">{{ $announcement->title }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div id="showCarousel" class="carousel slide" data-ride="carousel">
                    @if ($announcement->images->isNotEmpty())
                        <div class="card__img carousel-inner">
                            @foreach ($announcement->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ Storage::url($image->path) }}" alt="{{ $announcement->title }}">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Storage::url('images/default.jpg') }}" class="img-fluid"
                                    alt="{{ $announcement->title }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url('images/default.jpg') }}" alt="{{ $announcement->title }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url('images/default.jpg') }}" alt="{{ $announcement->title }}">
                            </div>
                        </div>
                    @endif
                    <a class="carousel-control-prev" href="#showCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#showCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-5">
            <p>{{ __('ui.genreCreate') }} : {{ $announcement->category->name }}</p>
            <p>{{ __('ui.developer') }} : {{ $announcement->developer }}</p>
            <p>{{ __('ui.published') }} : {{ $announcement->publisher }}</p>
            <p>{{ __('ui.price') }} : {{ $announcement->price }}</p>
            <p>{{ $announcement->body }}</p>
        </div>
        <div class="col-10">
            <p>{{ __('ui.createdBy') }} : {{ $announcement->user->name }} il
                {{ $announcement->created_at->format('d/m/Y H:i') }} </p>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            @if ($announcement->images)
                <div class="carousel-inner">
                    @foreach ($announcement->images as $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ Storage::url($image->path) }}" alt="{{ $announcement->title }}"
                                class="img-fluid p-3 rounded">
                        </div>
                    @endforeach
                </div>
                {{-- <img src="https://picsum.photos/200" class="card-img-top"
                alt="{{ $announcement_to_check->title }}"> --}}
        </div>
    @else
        @endif
    </div>
    </div>
</x-layout>

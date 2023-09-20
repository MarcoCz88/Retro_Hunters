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
                <p>{{ __('ui.genreCreate')}} : {{$announcement->category->name}}</p>
                <p>{{ __('ui.developer')}} : {{$announcement->developer}}</p>
                <p>{{ __('ui.published')}} : {{$announcement->publisher}}</p>
                <p>{{ __('ui.price')}} : {{$announcement->price}}</p>
                <p>{{$announcement->body}}</p>
            </div>
            <div class="col-7">
                <p>{{ __('ui.createdBy')}} : {{$announcement->user->name }} il {{$announcement->created_at->format('d/m/Y H:i')}} </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-carosel-show />
        </div>
    </div>
</x-layout>
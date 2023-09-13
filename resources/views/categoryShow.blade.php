<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-3">Giochi di genere {{ $category->name }}</h2>
            </div>
        </div>
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <x-card-announcement :announcement="$announcement" />
            @empty
        </div>
        <div class="row">
            <div class="col-12 ">
                <h2 class="text-center">Ops, nessuno ha caricato ancora nessun annuncio per questa categoria.</h2>
            </div>
        </div>
        <div class="row flex-column align-items-center">
            <div class="col-3">
                <p class="text-center">Vuoi pubblicarne uno?</p>
            </div>
            <div class="col-3 mx-2 px-2">
                <a href="{{ route('announcement.create') }}" class="btn btn-primary shadow">Pubblica un annuncio</a>
            </div>
        </div>
        @endforelse
    </div>
</x-layout>

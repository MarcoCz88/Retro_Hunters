<x-layout>
    <x-search />
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="my-3">Giochi di genere {{ $category->name }}</h2>
            </div>
        </div>
        <div class="row">
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 mt-2 mb-5">
                <x-card-announcement :announcement="$announcement"/>
            </div>
            @empty
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2 >Ops, nessuno ha caricato ancora nessun annuncio per questa categoria.</h2>
            </div>
        </div>
        <div class="row flex-column align-items-center">
            <div class="col-4 d-flex justify-content-center">
                <p>Vuoi pubblicarne uno?</p>
            </div>
            <div class="col-4 mx-2 px-2 d-flex justify-content-center">
                <a href="{{ route('announcement.create') }}" class="btn btn-primary shadow">Pubblica un annuncio</a>
            </div>
        </div>
        @endforelse
    </div>
</x-layout>

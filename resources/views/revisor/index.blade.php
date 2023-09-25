<x-layout>

    @if ($announcement_to_check)
        <div class="container mt-5 mb-3">
            <div class="row">
                <h2 class="mt-5">
                    Ecco l'annuncio da revisionare: {{ $announcement_to_check->title }}
                </h2>
                <div class="col-12 col-lg-6 ">
                    @if ($announcement_to_check->images)
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ Storage::url($image->path) }}" alt="{{ $announcement_to_check->title }}"
                                        class="img-fluid p-3 rounded">
                                </div>
                            @endforeach
                        </div>
                        <p class="px-3 card-text">Caricato da: {{ $announcement_to_check->user->name ?? '' }} il
                            {{ $announcement_to_check->created_at->format('d/m/Y H:i') }}</p>
                </div>
            @else
    @endif
    <div class="col-12 col-lg-6 p-5">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane"
                    aria-selected="true">{{ __('ui.details') }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tags-tab" data-bs-toggle="tab" data-bs-target="#tags-tab-pane"
                    type="button" role="tab" aria-controls="tags-tab-pane" aria-selected="false">Tags</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="revisor-tab" data-bs-toggle="tab" data-bs-target="#revisor-tab-pane"
                    type="button" role="tab" aria-controls="revisor-tab-pane" aria-selected="false">Revisione
                    Immagini</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                <p class="card-text">{{ $announcement_to_check->category->name }}</p>
                <p class="card-text">{{ $announcement_to_check->body }}</p>
                <p class="card-text">Sviluppato da: {{ $announcement_to_check->developer }}</p>
                <p class="card-text">Pubblicato da: {{ $announcement_to_check->publisher }}</p>
                <div class="card__price">{{ $announcement_to_check->price }}€</div>

                <div class="card-footer d-flex mt-5 pt-5">
                    <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success mx-1">Accetta</button>
                    </form>
                    <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger mx-1">Rifiuta</button>
                    </form>
                </div>

            </div>
            <div class="tab-pane fade p-4" id="tags-tab-pane" role="tabpanel" aria-labelledby="tags-tab" tabindex="0">
                <div class="p-2">
                    @if ($image->labels)
                        @foreach ($image->labels as $label)
                            <p class="d-inline"><span
                                    class="badge rounded-pill text-bg-secondary">#{{ $label }}</span> </p>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane fade p-4" id="revisor-tab-pane" role="tabpanel" aria-labelledby="revisor-tab"
                tabindex="0">
                {{-- <p>Esplicito: <span class="{{ $image->adult }}"></span></p>
                <p>Parodia: <span class="{{ $image->spoof }}"></span></p>
                <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                <p>Erotico: <span class="{{ $image->racy }}"></span></p> --}}
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th scope="col">Tipo</th>
                            <th scope="col">Esito</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Esplicito:</th>
                            <td><span class="{{ $image->adult }}"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Parodia:</th>
                            <td><span class="{{ $image->spoof }}"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Medicina:</th>
                            <td><span class="{{ $image->medical }}"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Violenza:</th>
                            <td><span class="{{ $image->violence }}"></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Erotico:</th>
                            <td><span class="{{ $image->racy }}"></span></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>



        {{-- <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
        <p class="card-text">{{ $announcement_to_check->category->name }}</p>
        <p class="card-text">{{ $announcement_to_check->body }}</p>
        <p class="card-text">Sviluppato da: {{ $announcement_to_check->developer }}</p>
        <p class="card-text">Pubblicato da: {{ $announcement_to_check->publisher }}</p>
        <div class="card__price">{{ $announcement_to_check->price }}€</div>
        <span class="card-footer">
            <p class="card-text">Caricato da: {{ $announcement_to_check->user->name ?? '' }} il
                {{ $announcement_to_check->created_at->format('d/m/Y H:i') }}</p>
        </span>
        <span class="card-footer d-flex">
            <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success mx-1">Accetta</button>
            </form>
            <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger mx-1">Rifiuta</button>
            </form>
        </span> --}}
    </div>
    </div>
    </div>
    {{-- <div class="col-12 col-lg-6">
        <h5 class="tc-accent">Tags</h5>
        <div class="p-2">
            @if ($image->labels)
                @foreach ($image->labels as $label)
                    <p class="d-inline">{{ $label }}</p>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-lg-3 col6">
        <div class="card-body">
            <h5 class="tc-accent">Revisione Immagini</h5>
            <p>Esplicito: <span class="{{ $image->adult }}"></span></p>
            <p>Parodia: <span class="{{ $image->spoof }}"></span></p>
            <p>Medicina: <span class="{{ $image->medical }}"></span></p>
            <p>Violenza: <span class="{{ $image->violence }}"></span></p>
            <p>Erotico: <span class="{{ $image->racy }}"></span></p>
        </div>
    </div> --}}
    </div>
    </div>
@else
    <div class="container my-3">
        <div class="row row_revisor">
            <div class="col-12">
                <h2>
                    Non ci sono annunci da controllare
                </h2>
            </div>
        </div>
    </div>
    @endif
    @if ($announcement_to_undo)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <h2>Log ultima azione: </h2>
                            <tr>
                                <th scope="col">Titolo</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Revisionato il: </th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $announcement_to_undo->title }}</th>
                                <td>{{ $announcement_to_undo->body }}</td>
                                <td>{{ $announcement_to_undo->updated_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <button onclick="document.getElementById('formUndo').submit()" type="submit"
                                        class="btn btn-primary mx-1">Annulla revisione</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <form id="formUndo"
                        action="{{ route('revisor.undo_announcement', ['announcement' => $announcement_to_undo]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                    </form>

                </div>
            </div>
        </div>
    @endif
</x-layout>

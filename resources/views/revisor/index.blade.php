<x-layout>

    @if ($announcement_to_check)
        <div class="container my-3">
            <div class="row row_card">
                <h2>
                    Ecco l'annuncio da revisionare: {{ $announcement_to_check->title }}
                </h2>
                <div class="col-12 d-flex justify-content-center">
                    <div class="card card_revisor m-3" style="width: 18rem;">
                        <div class="card__img__revisor">
                            <img src="https://picsum.photos/200" class="card-img-top"
                                alt="{{ $announcement_to_check->title }}">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                            <p class="card-text">{{ $announcement_to_check->category->name }}</p>
                            <p class="card-text text-truncate">{{ $announcement_to_check->body }}</p>
                            {{-- <p class="card-text text-center">Prezzo: {{ $announcement_to_check->price }}€</p> --}}
                            <p class="card-text">Sviluppato da: {{ $announcement_to_check->developer }}</p>
                            <p class="card-text">Pubblicato da: {{ $announcement_to_check->publisher }}</p>
                            <div class="card__price">{{ $announcement_to_check->price }}€</div>
                            <span class="card-footer">
                                <p class="card-text">Caricato da: {{ $announcement_to_check->user->name ?? '' }} il
                                    {{ $announcement_to_check->created_at->format('d/m/Y H:i') }}</p>
                            </span>
                            <span class="card-footer d-flex justify-content-between align-items-center">
                                <form
                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success mx-1">Accetta</button>
                                </form>
                                <form
                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger mx-1">Rifiuta</button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <h2>Log ultima azione: </h2>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $announcement_to_undo->title }}</th>
                            <td>{{ $announcement_to_undo->body }}</td>
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

</x-layout>

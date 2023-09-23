<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ __('ui.recapAnn') }}{{ $user->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Piattaforma</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Sviluppatore</th>
                            <th scope="col">Editore</th>
                            <th scope="col">Stato Revisione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->announcements as $announcement)
                            <tr>
                                <th scope="row">{{ $announcement->title }}</th>
                                <td>{{ $announcement->platform }}</td>
                                <td>{{ $announcement->category->name }}</td>
                                <td>{{ $announcement->price }}</td>
                                <td>{{ $announcement->developer }}</td>
                                <td>{{ $announcement->publisher }}</td>
                                <td>
                                    @if ($announcement->is_accepted === 0)
                                        <span class="text-danger fas fa-circle">
                                    @elseif ($announcement->is_accepted === 1)
                                        <span class="text-success fas fa-circle">
                                    @else
                                        <span class="text-secondary fas fa-circle">
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-layout>

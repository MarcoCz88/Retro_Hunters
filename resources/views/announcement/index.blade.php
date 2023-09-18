<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutti gli annunci</h2>
            </div>
        </div>
        <div class="row mb-5">
            @forelse($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 mt-2 mb-5">
                    <x-card-announcement :announcement="$announcement" />
                </div>
            @empty
                <div class="col-12">
                    <div class="my-3">
                        <p>Non ci sono annunci per questa ricerca.</p>
                        <a href="{{ route('announcement.create') }}">Inseriscilo tu!</a>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>

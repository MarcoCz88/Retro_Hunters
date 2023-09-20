<x-layout>
    <x-search />
    <div class="container">
        <div class="row">
            <div class="col-12  mt-3 text-blue">
            <p class="h3 my-3">{{ __('ui.allAnnouncements')}}</p>
            </div>
        </div>
        <div class="row mb-5">
            @forelse($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 mt-5 mb-5">
                    <x-card-announcement :announcement="$announcement" />
                </div>
            @empty
                <div class="col-12">
                    <div class="my-3">
                        <p>{{ __('ui.noAnnouncements')}}</p>
                        <a href="{{ route('announcement.create') }}">{{ __('ui.addYou')}}</a>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>

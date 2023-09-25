<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mt-3 text-primary border-index">
                <h2 class="mt-4">{{ __('ui.addAnnouncement')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <livewire:create-announcement />
            </div>
        </div>
    </div>

</x-layout>

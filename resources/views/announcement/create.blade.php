<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 text-primary">
                <h4 class="mt-4">{{ __('ui.addAnnouncement')}}</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <livewire:create-announcement />
            </div>
        </div>
    </div>

</x-layout>

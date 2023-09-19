<x-layout>
    
    <div class="container mt-3">
        <x-masthead/>
        <x-search />
        <div class="row">
          <div class="col-12">
            <p class="h3  mt-3 text-primary text-center">{{ __('ui.lastSixAnnouncements')}}</p>
              <div class="row align-items-center">
                @foreach($announcements as $announcement)
                 <div class="col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center">                
                   <x-card-announcement :announcement="$announcement"/>              
                 </div>
                @endforeach
              </div>
          </div>
        </div>
        
    </div>
</x-layout>
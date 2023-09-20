<x-layout>
    
    <div class="container mt-3">
        <x-masthead/>
        <x-search />
        <div class="row">
          <div class="col-4 border-index">
            <p class="my-4 text-primary text-center fs-3">{{ __('ui.lastSixAnnouncements')}} :</p>
          </div>
          
          <div class="col-12">
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
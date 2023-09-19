<x-layout>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-primary">Retro Hunters</h1>
                <h3 class="text-center text-primary">Un mare di videogiochi</h3>
            </div>
        </div>
        <x-search />
        <div class="row align-items-center">
            
              @foreach($announcements as $announcement)
              <div class="col-12 col-md-6 col-lg-4 mt-5 d-flex justify-content-center">                
                <x-card-announcement :announcement="$announcement"/>              
              </div>
              @endforeach
       
        </div>
    </div>
</x-layout>
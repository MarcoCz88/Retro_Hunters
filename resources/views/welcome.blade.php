<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Retro Hunters</h1>
            </div>
        </div>
        <div class="row align-items-center">
            
              @foreach($announcements as $announcement)
              <div class="col-12 col-md-6 col-lg-4 mt-2 d-flex justify-content-center">                
                <x-card-announcement :announcement="$announcement"/>              
              </div>
              @endforeach
       
        </div>
    </div>
</x-layout>
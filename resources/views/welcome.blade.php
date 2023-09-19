<x-layout>
    
    <div class="container mt-3">
        <x-masthead/>
        Proviamo sto cazzo di push <br>
         Valerio-I lo vedo
        Proviamo sto cazzo di push
        riesco a pullare e pushare
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
<x-layout>
    
    <div class="container mt-3">
        <x-masthead/>
<<<<<<< HEAD
        Proviamo sto cazzo di push <br>
         Valerio-I lo vedo
=======
        Proviamo sto cazzo di push
        riesco a pullare e pushare
>>>>>>> 9747a9b19e5e8bff2a3596354943067220f633b5
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
<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <div class="container mt-5  ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 boxLog mx-2 mx-md-0 p-3">
                <h2 class="text-center">Login</h2>
                <form action="{{route('login')}}" method="POST" class="d-flex flex-column align-items-center">
                    @csrf
                      <div class="form-group">
                         <label class="form_label">Email</label>
                         <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                         <label class="form_label">Password</label>
                         <input type="password" class="form-control" name="password">
                      </div>
                      <button type="submit" class="col-5 button-89 my-3 text-dark fs-6" role="button">{{ __('ui.login')}}</button>
                   </form>
            </div>
            <p class="text-center mt-2">{{ __('ui.noAccount')}} <a class="linkLog" href="{{route('register')}}"> {{ __('ui.registered')}}</a></p>
        </div>
        <div class="row">
           {{-- <form action="{{route('login')}}" method="POST">
            @csrf
              <div class="form-group">
                 <label class="form_label">Email</label>
                 <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                 <label class="form_label">Password</label>
                 <input type="password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-primary my-3">Accedi</button>
           </form>
           <p>Non hai ancora un account? <a href="{{route('register')}}">Registrati</a></p> --}}
        </div>
    </div>
</x-layout>
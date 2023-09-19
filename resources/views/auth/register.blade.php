<x-layout>
    <x-slot name="title">
        Registrati
    </x-slot>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 boxLog mx-2 mx-md-0 p-3">
                <h2 class="text-center">Registrati</h2>
                <form method="POST" action="{{route('register')}}">
                  @csrf
                    <div class="form-group">
                       <label>Nome</label>
                       <input type="text" class="form-control" name="name">
                         @error('name')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input type="text" class="form-control" name="email">
                         @error('email')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label>Password</label>
                       <input type="password" class="form-control" name="password">
                         @error('password')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label>Conferma Password</label>
                       <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Registrati</button>
                 </form>
            </div>
            <p class="text-center mt-2">Hai già un account?' <a class="linkLog" href="{{route('login')}}">Accedi</a></p>

        </div>
    </div>
    <div class="container h-50 d-inline-block"></div>
  
</x-layout>

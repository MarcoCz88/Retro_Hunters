<x-layout>
<x-slot name="title">
        Registrati
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Registrati</h2>
            </div>
        </div>
        <div class="row">
            <form method="POST" action="{{route('register')}}">
             @csrf
               <div class="form-group col-md-5">
                  <label>Nome</label>
                  <input type="text" class="form-control" name="name">
                    @error('name')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
               </div>
               <div class="form-group col-md-5">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email">
                    @error('email')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
               </div>
               <div class="form-group col-md-5">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
                    @error('password')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
               </div>
               <div class="form-group col-md-5">
                  <label>Conferma Password</label>
                  <input type="password" class="form-control" name="password_confirmation">
               </div>
               <button type="submit" class="btn">Registrati</button>
            </form>
        </div>
    </div>
</x-layout>
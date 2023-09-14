<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Login</h2>
            </div>
        </div>
        <div class="row">
           <form action="{{route('login')}}" method="POST">
            @csrf
              <div class="form-group">
                 <label class="form_label">Email</label>
                 <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                 <label class="form_label">Password</label>
                 <input type="password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Accedi</button>
           </form>
           <p>Non hai ancora un account? <a href="{{route('register')}}">Registrati</a></p>
        </div>
    </div>
</x-layout>
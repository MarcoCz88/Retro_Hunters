<x-layout>
    <x-slot name="title">
    {{ __('ui.registered')}}
    </x-slot>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 boxLog mx-2 mx-md-0 p-3">
                <h2 class="text-center">{{ __('ui.registered')}}</h2>
                <form method="POST" action="{{route('register')}}">
                  @csrf
                    <div class="form-group">
                       <label>{{ __('ui.name')}}</label>
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
                       <label>{{ __('ui.confirmPsw')}}</label>
                       <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">{{ __('ui.registered')}}</button>
                 </form>
            </div>
            <p class="text-center mt-2">{{ __('ui.haveAccount')}}<a class="linkLog" href="{{route('login')}}">{{ __('ui.login')}}</a></p>

        </div>
    </div>
    <div class="container h-50 d-inline-block"></div>
  
</x-layout>

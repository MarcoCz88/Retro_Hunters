<x-layout>
    <x-slot name="title">
    {{ __('ui.registered')}}
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8 bd-register">
            <h2 class="text-center text-primary my-5">{{ __('ui.registered')}}</h2>
          </div>
          <div class="col-12 col-md-7 mx-2 mx-md-0 p-3 register-custom mt-5">
                <form method="POST" action="{{route('register')}}" class="d-flex flex-column align-items-center">
                  @csrf
                    <div class="form-group">
                       <label class="bg-color2 rounded-pill fs-4">-{{ __('ui.name')}}-</label>
                       <input type="text" class="form-control" name="name">
                         @error('name')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label class="bg-color2 rounded-pill fs-4">-Email-</label>
                       <input type="text" class="form-control" name="email">
                         @error('email')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label class="bg-color2 rounded-pill fs-4">-Password-</label>
                       <input type="password" class="form-control" name="password">
                         @error('password')
                           <div class="text-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                       <label class="bg-color2 rounded-pill fs-4">-{{ __('ui.confirmPsw')}}-</label>
                       <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="col-5 button-894 my-3 fs-6" role="button">{{ __('ui.registered')}}</button>
                 </form>
            </div>
            <p class="text-center mt-2">{{ __('ui.haveAccount')}}<a class="linkLog" href="{{route('login')}}">{{ __('ui.login')}}</a></p>
          </div>
        </div>
    </div>
    <div class="container h-50 d-inline-block"></div>
  
</x-layout>

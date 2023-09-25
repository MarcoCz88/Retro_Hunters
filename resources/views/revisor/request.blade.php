<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="col-6 text-center text-primary fs-3 mt-5">Entra nel Team</h2>
        </div>
    </div>
    <form action="{{route('become.revisor', $p_message)}}" method="get" class="contact-form row justify-content-center align-items-center">
      @csrf
      <div class="form-field col-lg-6">
         <label class="label" for="message">Inserisci le motivazioni per la tua candidatura: </label>
         <textarea id="message" name= "p_message" class="input-text js-input" type="text" required></textarea>
         @error('p_message')
         {{ $message }}
     @enderror
      </div>
      <div class="row align-items-center justify-content-center">
         <button class=" col-3 button-892 text-dark" role="button">{{ __('ui.summit') }}</button>
      </div>
    </form>
</x-layout>
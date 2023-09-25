<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="col-6 text-center text-primary fs-3 mt-5">Entra nel Team</h2>
        </div>
    </div>
    <form action="{{route('become.revisor')}}" method="GET" class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Nome</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="surname" class="input-text js-input" type="text" required>
         <label class="label" for="surname">Cognome</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Contatto telefonico</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Messaggio</label>
      </div>
      <div class="row align-items-center justify-content-center">
         <button class=" col-3 button-892 text-dark" role="button">{{ __('ui.summit') }}</button>
      </div>
    </form>
</x-layout>
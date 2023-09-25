<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="col-6 text-center text-primary mt-5">{{__('ui.join')}}</h2>
        </div>
    </div>
    <form action="{{route('become.revisor', Auth::user())}}" method="get" class="contact-form row justify-content-center align-items-center">
      @csrf
      <div class="col-lg-6">
         <label class="text-primary mt-3 mb-2">{{__('ui.sendCurriculum')}} </label>
         <textarea id="message" name= "presentation_message" class="input-text" type="text" required></textarea>
        @error('presentation_message')
         {{ $message }}
        @enderror
      </div>
      <div class="row align-items-center justify-content-center">
         <button class=" col-4 col-md-1 button-892 text-dark" role="button">{{ __('ui.summit') }}</button>
      </div>
    </form>
</x-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6">
            <form wire:submit.prevent="update">
                <div class="mb-3 mt-3">
                    <label class="form-label text-primary">{{ __('ui.title') }} :</label>
                    <input type="text" class="form-control border border-warning" wire:model.blur="title">
                    <div>
                        @error('title')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.plot') }} :</label>
                    <textarea type="text-denger text" class="form-control border border-warning" wire:model.blur="body">Inserisci la tua descrizione...</textarea>
                    <div>
                        @error('body')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.platform') }} :</label>
                    <input type="text" class="form-control border border-warning" wire:model.blur="platform">
                    <div>
                        @error('developer')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.price') }} :</label>
                    <input type="numeric" class="form-control border border-warning" wire:model.blur="price">
                    <div>
                        @error('price')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.developer') }} :</label>
                    <input type="text" class="form-control border border-warning" wire:model.blur="developer">
                    <div>
                        @error('developer')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.published') }} :</label>
                    <input type="text" class="form-control border border-warning" wire:model.blur="publisher">
                    <div>
                        @error('publisher')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label text-primary">{{ __('ui.genreCreate') }} :</label>
                    <select class="form-control border border-warning text-primary" wire:model.blur.live="category">
                        <option value="">{{ __('ui.category') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div>
                        @error('category')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </div> 
                <button class="button-892 text-dark" role="button">{{ __('ui.summit') }}</button>
            </form>
               {{--  <div class="mb-3">
                    <input wire:model.blur="temporary_images" type="file" multiple
                        class="form-control shadow @error('temporary_images.*') is invalid @enderror"
                        placeholder="Img" />
                    @error('temporary_images.*')
                        <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
                
           
        </div>
        <div class="col-12 col-xl-6">
            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>Photo preview: </p>
                    </div>
                </div>
                <div class="row justify-content-around ">
                    @foreach ($images as $key => $image)
                        <div class="col-12 col-md-3 position-relative boxImg border"
                            style="background-image: url('{{ $image->temporaryUrl() }}')">

                            <button type="button" class=" btnImg" wire:click="removeImage({{ $key }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" style="color: red" class="bi bi-trash3-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div> --}}
    </div>

    <div class="carousel-inner">
        @foreach ($announcement->images as $image)
            <div class="carousel-item active">
                <img src="{{ Storage::url($image->path) }}" alt="{{ $announcement->title }}">
                <a href=""></a>
            </div>
        @endforeach
    </div>
</div>

{{-- <img class=" img-preview shadow rounded " src="{{ $image->temporaryUrl() }}"> --}}
{{-- <div  style="backgroud-image:url({{$image->temporaryUrl()}});"></div> --}}

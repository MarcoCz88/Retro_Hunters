<div class="container">
    <form wire:submit.prevent="store">
        <div class="mb-3 mt-3">
            <label class="form-label text-primary">{{ __('ui.title') }} :</label>
            <input type="text" class="form-control border border-warning" wire:model="title">
            <div>
                @error('title')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-primary">{{ __('ui.plot') }} :</label>
            <textarea type="text-denger text" class="form-control border border-warning" wire:model="body">Inserisci la tua descrizione...</textarea>
            <div>
                @error('body')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-primary">{{ __('ui.price') }} :</label>
            <input type="numeric" class="form-control border border-warning" wire:model="price">
            <div>
                @error('price')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-primary">{{ __('ui.developer') }} :</label>
            <input type="text" class="form-control border border-warning" wire:model="developer">
            <div>
                @error('developer')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-primary">{{ __('ui.published') }} :</label>
            <input type="text" class="form-control border border-warning" wire:model="publisher">
            <div>
                @error('publisher')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-primary">{{ __('ui.genreCreate') }} :</label>
            <select class="form-control border border-warning text-primary" wire:model.live="category">
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
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" multiple
                class="form-control shadow @error('temporary_images.*') is invalid @enderror" placeholder="Img" />
            @error('temporary_images.*')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <button class="button-89 text-dark" role="button">{{ __('ui.summit') }}</button>
    </form>

    @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview: </p>
                <div class="row border">
                    @foreach ($images as $key => $image)
                        <div class="col-4 my-3 mx-2 d-flex justify-content-around">
                            <img class=" img-preview shadow rounded" src="{{ $image->temporaryUrl() }}">
                            {{-- <div  style="backgroud-image:url({{$image->temporaryUrl()}});"></div> --}}
                            <button type="button" class="btn btn-danger shadow"
                                wire:click="removeImage({{ $key }})">Cancella</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>

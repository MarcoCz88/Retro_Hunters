{{-- 'title', 'body', 'price', 'developer', 'publisher' --}}
<form wire:submit.prevent="store">
    <div class="mb-3 mt-3">
        <label class="form-label text-primary">{{ __('ui.title')}} :</label>
        <input type="text" class="form-control border border-warning" wire:model="title">
        <div>
            @error('title')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">{{ __('ui.plot')}} :</label>
        <textarea type="text-denger text" class="form-control border border-warning" wire:model="body">Inserisci la tua descrizione...</textarea>
        <div>
            @error('body')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">{{ __('ui.price')}} :</label>
        <input type="numeric" class="form-control border border-warning" wire:model="price">
        <div>
            @error('price')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">{{ __('ui.developer')}} :</label>
        <input type="text" class="form-control border border-warning" wire:model="developer">
        <div>
            @error('developer')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">{{ __('ui.published')}} :</label>
        <input type="text" class="form-control border border-warning" wire:model="publisher">
        <div>
            @error('publisher')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">{{ __('ui.genreCreate')}} :</label>
        <select class="form-control border border-warning text-primary" wire:model.live="category">
            <option value="">{{ __('ui.category')}}</option>
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
    <button class="button-89 text-dark" role="button">{{ __('ui.summit')}}</button>
</form>

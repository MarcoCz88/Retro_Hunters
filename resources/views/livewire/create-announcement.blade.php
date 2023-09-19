{{-- 'title', 'body', 'price', 'developer', 'publisher' --}}
<form wire:submit.prevent="store">
    <div class="mb-3">
        <label class="form-label">Titolo: </label>
        <input type="text" class="form-control" wire:model="title">
        <div>
            @error('title')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione: </label>
        <textarea type="text-denger text" class="form-control" wire:model="body">Inserisci la tua descrizione...</textarea>
        <div>
            @error('body')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo: </label>
        <input type="numeric" class="form-control" wire:model="price">
        <div>
            @error('price')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Sviluppatore: </label>
        <input type="text" class="form-control" wire:model="developer">
        <div>
            @error('developer')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Produttore: </label>
        <input type="text" class="form-control" wire:model="publisher">
        <div>
            @error('publisher')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Genere: </label>
        <select class="form-control" wire:model.live="category">
            <option value="">Scegli la categoria</option>
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

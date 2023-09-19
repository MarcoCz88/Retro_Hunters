{{-- 'title', 'body', 'price', 'developer', 'publisher' --}}
<form wire:submit.prevent="store">
    <div class="mb-3 mt-3">
        <label class="form-label text-primary">Titolo: </label>
        <input type="text" class="form-control border border-warning" wire:model="title">
        <div>
            @error('title')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Descrizione: </label>
        <textarea type="text-denger text" class="form-control border border-warning" wire:model="body">Inserisci la tua descrizione...</textarea>
        <div>
            @error('body')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Prezzo: </label>
        <input type="numeric" class="form-control border border-warning" wire:model="price">
        <div>
            @error('price')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Sviluppatore: </label>
        <input type="text" class="form-control border border-warning" wire:model="developer">
        <div>
            @error('developer')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Produttore: </label>
        <input type="text" class="form-control border border-warning" wire:model="publisher">
        <div>
            @error('publisher')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Genere: </label>
        <select class="form-control text-primary border border-warning" wire:model.live="category">
            <option value="" class="">Scegli la categoria</option>
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
    <button class="button-89 text-dark" role="button">Invia</button>
</form>

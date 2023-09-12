{{-- 'title', 'body', 'price', 'developer', 'publisher' --}}
<form wire:submit.prevent="store">
    <div class="mb-3">
        <label class="form-label">Titolo: </label>
        <input type="text" class="form-control" wire:model="title">
        <div>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione: </label>
        <textarea type="text" class="form-control" wire:model="body">Inserisci la tua descrizione...</textarea>
        <div>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo: </label>
        <input type="numeric" class="form-control" wire:model="price">
        <div>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Sviluppatore: </label>
        <input type="text" class="form-control" wire:model="developer">
        <div>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Produttore: </label>
            <input type="text" class="form-control" wire:model="publisher">
            <div>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

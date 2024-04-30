<!-- resources/views/livewire/account-delete-component.blade.php -->

<div>
    <form wire:submit.prevent="deleteAccount">
        @csrf

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" wire:model.defer="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-danger">Delete Account</button>
    </form>
</div>

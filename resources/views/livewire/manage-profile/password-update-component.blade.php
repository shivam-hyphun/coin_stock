<!-- resources/views/livewire/password-update-component.blade.php -->

<div>
    @if ($passwordUpdated)
    <div class="alert alert-success" role="alert">
        Password updated successfully!
    </div>
@endif
    <form wire:submit.prevent="updatePassword">
        @csrf

        <div class="form-group">
            <label for="oldPassword">Old Password</label>
            <input type="password" class="form-control" id="oldPassword" wire:model.defer="oldPassword">
            @error('oldPassword') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" wire:model.defer="newPassword">
            @error('newPassword') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" class="form-control" id="confirmPassword" wire:model.defer="confirmPassword">
        </div>

        <button type="submit" class="btn btn-primary">Update Password</button>
    </form>
</div>

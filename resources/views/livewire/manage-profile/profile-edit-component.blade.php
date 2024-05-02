<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" wire:model.defer="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model.defer="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <!-- File input -->
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" wire:model="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
            <!-- Validation error message -->
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror

            <!-- Images section -->
            <div class="d-flex mt-3">
                <!-- Selected image -->
                <div class="mr-3">
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" alt="Selected Image" style="max-width: 200px;">

                    @endif
                </div>
                <!-- Profile image -->
                <div>
                    @if(empty(auth()->user()->image))
                        <img src="{{ asset('/css/admin/dist/img/user2-160x160.jpg') }}" alt="Default Profile image" class="border" style="max-width: 200px;">
                    @else
                        <img src="{{ asset('storage/users/' . auth()->user()->image) }}" alt="Profile image" class="border" style="max-width: 200px;">
                    @endif
                </div>
            </div>
        </div>







        <button type="submit" class="btn btn-primary">Save</button>


    </form>
</div>

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">

                <!-- livewire/manage-users/user-details-component.blade.php -->

                <form wire:submit.prevent="save" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- User Name -->
                            <div class="form-group">
                                <label for="user_name">User Name</label>
                                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="user_name" name="user_name" wire:model="user_name">
                                @error('user_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <input type="email" class="form-control @error('user_email') is-invalid @enderror" id="user_email" name="user_email" wire:model="user_email">
                                @error('user_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" wire:model="password">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" wire:model="password_confirmation">
                                @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Profile Picture -->
                            <div class="form-group">
                                <label for="user_image">Profile Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('user_image') is-invalid @enderror" id="user_image" name="user_image" accept="image/*" wire:model="user_image">
                                        <label class="custom-file-label" for="user_image">Choose file</label>
                                    </div>
                                    @error('user_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <!-- Image preview -->
                                @if ($user_image)
                                    <img src="{{ $user_image->temporaryUrl() }}" alt="Preview" style="max-width: 20%; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <!-- Save Button -->
                        <button type="submit" class="col-md-1 text-center mx-2 btn btn-success">Save</button>
                        <!-- Cancel Button (only if in edit mode) -->
                        @if ($isEdit)
                            <button wire:click="cancel" class="col-md-1 text-center btn btn-danger">Cancel</button>
                        @endif
                    </div>
                    <div class="mb-3 row">
                        <!-- Loading Indicator -->
                        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                    </div>
                </form>




            </div>
        </div>
    </div>

</div>

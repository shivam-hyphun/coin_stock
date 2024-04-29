<!-- resources/views/components/profile-information-form.blade.php -->
<div>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <p class="text-sm mt-2 text-gray-800">
                        Your email address is unverified.
                        <button form="send-verification" class="btn btn-link text-sm text-gray-600">Click here to re-send the verification email.</button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary mx-3">Save</button>
            </div>
        </div>

        @if (session('status') === 'profile-updated')
            <p class="text-success">Saved.</p>
        @endif
    </form>
</div>

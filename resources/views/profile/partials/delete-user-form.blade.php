<section class="space-y-6">


    <form method="post" action="{{ route('profile.destroy') }}" class="space-y-6"  id="deleteForm">
        @csrf
        @method('DELETE')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete your account?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div class="form-group mt-6">
            <label for="password" class="text-sm font-weight-bold text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            <!-- You can add validation error message here if needed -->
        </div>

        <div class="mt-6">
            <button type="button" class="btn btn-secondary" onclick="cancelDelete()">Cancel</button>
            <button type="submit" class="btn btn-danger ml-3">Delete Account</button>
        </div>
    </form>
</section>

<script>
   function cancelDelete() {
        // Reset the form fields
        document.getElementById("deleteForm").reset();
    }
</script>

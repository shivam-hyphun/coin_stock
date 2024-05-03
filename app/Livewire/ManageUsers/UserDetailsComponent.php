<?php

namespace App\Livewire\ManageUsers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;

class UserDetailsComponent extends Component
{
    use WithFileUploads;
    public $users;
    #[Locked]
    public $user_id;
    #[Validate('required')]
    public $user_email = '';
    #[Validate('required')]
    public $user_name = '';
    public $user_image;
    public $password = '';
    public $password_confirmation = '';
    public $isEdit = false;
    public $title = 'Add New User';
    public $userIdToDelete;
    public function resetFields()
    {
        $this->title = 'Add New User';
        $this->reset('user_name', 'user_email', 'user_image', 'password', 'password_confirmation');
        $this->isEdit = false;
    }

    public function save()
    {
        $this->validate([
            'user_name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'user_email' => 'required|email',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable',

        ], [
            'user_name.required' => 'The user name field is required.',
            'user_name.regex' => 'The user name may only contain letters and spaces.',
            'user_email.required' => 'The email field is required.',
            'user_email.email' => 'The email must be a valid email address.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',

        ]);
        $user = User::find($this->user_id);

        if ($user && $this->password && Hash::check($this->password, $user->password)) {
            // Password matches, proceed with updating user's details
            $userData = [
                'name' => $this->user_name,
                'email' => $this->user_email,
            ];
            // Update password only if it's confirmed
            if ($this->password_confirmation) {
                $userData['password'] = bcrypt($this->password);
            }
            $user->update($userData);
            // Update user's image if provided
            if ($this->user_image) {
                $imageName = time() . '.' . $this->user_image->getClientOriginalExtension();
                $this->user_image->storeAs('public/users', $imageName);
                $user->image = $imageName;
            }


            $user->save();

            session()->flash('message', 'User details updated successfully.');
        } elseif (!$user) {
            // If user does not exist, create a new user
            $userData = [
                'name' => $this->user_name,
                'email' => $this->user_email,
                'password' => bcrypt($this->password), // Hash the provided password
            ];

            // Create the user
            $user = User::create($userData);

            // Flash success message
            session()->flash('message', 'User created successfully.');
        } else {
            // Password doesn't match, show error message
            $this->addError('password', 'The provided password does not match.');
        }
        $this->resetFields();
    }


    public function edit($id)
    {
        $this->title = 'Edit User';

        $user = User::findOrFail($id);

        $this->user_id = $id;
        $this->user_name = $user->name;
        $this->user_email = $user->email;

        $this->isEdit = true;
    }

    public function cancel()
    {
        $this->resetFields();
    }

    #[On('confirmDelete')]
    public function confirmDelete($userId)
    {

        $this->userIdToDelete = $userId;
        $this->dispatch('confirmDeleteAction', ['userId' => $userId]);
        // dd( $this->dispatch('confirmDeleteAction', ['userId' => $userId]));
    }
    #[On('delete')]
    public function delete($userId)
    {
        // Find the user by ID
        $user = User::where('id', $userId);

        // Check if the user exists
        if ($user) {
            // Delete the user
            $deleted = $user->delete();

            // Check if the user was successfully deleted
            if ($deleted) {
                // Flash success message
                session()->flash('message', 'User deleted successfully.');

                // Emitting an event to show success message
                $this->dispatch('delete-success', ['message' => 'User deleted successfully!']);
            } else {
                // Handle deletion failure (e.g., display an error message)
                // For example:
                session()->flash('error', 'Failed to delete user.');
            }
        } else {
            // User not found, handle error (e.g., display an error message)
            // For example:
            session()->flash('error', 'User not found.');
        }
    }



    public function render()
    {
        $this->users = User::where('usertype', 'user')->latest()->get();
        return view('livewire.manage-users.user-details-component');
    }
}

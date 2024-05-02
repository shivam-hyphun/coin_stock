<?php

namespace App\Livewire\ManageUsers;


use App\Models\User;


use Livewire\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash; // Add this line
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
    public function resetFields()
    {
        $this->title = 'Add New User';

        $this->reset('user_name', 'user_email', 'user_image','password','password_confirmation' );

        $this->isEdit = false;
    }

    public function save()
    {
        $this->validate([
            'user_name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'user_email' => 'required|email',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable',
            'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            // Validation messages
        ]);

        // Fetch the user by ID
        $user = User::find($this->user_id);

        // If user exists and password is provided, check if it matches the stored password
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

            // Save the user
            $user->save();

            // Flash success message
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

        // Reset form fields
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

    public function delete($id)
    {
        User::find($id)->delete();

        session()->flash('message', 'User is deleted.');
    }

    public function render()
    {
        $this->users = User::where('usertype', 'user')->latest()->get();
        return view('livewire.manage-users.user-details-component');
    }
    }


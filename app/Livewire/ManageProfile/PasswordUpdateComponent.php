<?php

namespace App\Livewire\ManageProfile;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordUpdateComponent extends Component
{
public $oldPassword;
    public $newPassword;
    public $confirmPassword;
    public $passwordUpdated = false;

    public function updatePassword()
    {
        $this->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8|different:oldPassword|same:confirmPassword',
            'confirmPassword' => 'required|min:8',
        ]);

        // Verify the old password
        if (!Auth::attempt(['email' => Auth::user()->email, 'password' => $this->oldPassword])) {
            $this->addError('oldPassword', 'The old password is incorrect.');
            return;
        }

        // Update the user's password
        Auth::user()->update(['password' => bcrypt($this->newPassword)]);

        // Set passwordUpdated to true to show the success message
        $this->passwordUpdated = true;

        // Reset the fields
        $this->reset(['oldPassword', 'newPassword', 'confirmPassword']);
    }
    public function render()
    {
        return view('livewire.manage-profile.password-update-component');
    }
}

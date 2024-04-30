<?php

namespace App\Livewire\ManageProfile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class AccountDeleteComponent extends Component
{
    public $password;

    public function deleteAccount()
    {
        $this->validate([
            'password' => 'required',
        ]);

        if (!Auth::attempt(['email' => Auth::user()->email, 'password' => $this->password])) {
            $this->addError('password', 'The password is incorrect.');
            return;
        }

        $user = Auth::user();
        $user->delete();

        // Logout the user after account deletion
        Auth::logout();

        session()->flash('message', 'Your account has been deleted successfully.');
    }
    public function render()
    {
        return view('livewire.manage-profile.account-delete-component');
    }
}

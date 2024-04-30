<?php

namespace App\Livewire\ManageProfile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class ProfileEditComponent extends Component
{
    public $name;
    public $email;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        Auth::user()->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->dispatch('profileUpdated');
        session()->flash('message', 'Profile updated successfully.');

    }
    public function render()
    {
        return view('livewire.manage-profile.profile-edit-component')
        ->layout('components.layouts.app');
    }
}

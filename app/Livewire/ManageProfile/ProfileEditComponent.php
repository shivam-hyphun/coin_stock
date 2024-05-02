<?php

namespace App\Livewire\ManageProfile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ProfileEditComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $image;

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
            'image' => 'nullable|image|max:1024', // Max file size: 1MB
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;

        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('public/users', $imageName);

            $user = Auth::user();
            $user->image = $imageName;
            $user->save();

            session()->flash('message', 'User image uploaded successfully.');
        }

        $user->save();

        $this->dispatch('profileUpdated');
        session()->flash('message', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.manage-profile.profile-edit-component')
            ->layout('components.layouts.app');
    }
}

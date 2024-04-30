<?php

namespace App\Livewire\Aside;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Attributes\On;

class UserProfileComponent extends Component
{
    public $userName;
    public $userImage;


    #[On('profileUpdated')]
    public function mount()
    {
        $user = Auth::user();
        $this->userName = $user->name;
        $this->userImage = $user->image ? asset('storage/' . $user->image) : asset('css/admin/dist/img/user2-160x160.jpg');
    }
    protected $listeners = ['profileUpdated'];
    public function profileUpdated()
    {
        $user = Auth::user();
        $this->userName = $user->name;
        $this->userImage = $user->image ? asset('storage/' . $user->image) : asset('css/admin/dist/img/user2-160x160.jpg');
    }

    public function render()
    {
        return view('livewire.aside.user-profile-component');
    }
}

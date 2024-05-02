<?php

namespace App\Livewire\UserDashboard;

use Livewire\Component;
use App\Models\Coin_purchase;
use App\Models\Coins;
use Illuminate\Support\Facades\Auth;

class UserPurchesedCoinsListComponent extends Component
{
    public $coins;
public $user_id;

public function mount()
{
    $this->user_id = Auth::id();

    // Fetch all coin purchases along with associated coin details for the authenticated user
    $this->coins = Coin_purchase::where('user_id', $this->user_id)->with('coins')->latest()->get();
}


    public function render()
    {

        return view('livewire.user-dashboard.user-purchesed-coins-list-component');
    }
}

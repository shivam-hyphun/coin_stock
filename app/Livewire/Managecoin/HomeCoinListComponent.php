<?php

namespace App\Livewire\Managecoin;

use Livewire\Component;
use App\Models\Coins;

class HomeCoinListComponent extends Component
{
    public $coins;
    public function mount()
    {
        $this->coins = Coins::all();
    }

    public function render()
    {
        return view('livewire.managecoin.home-coin-list-component');
    }
}

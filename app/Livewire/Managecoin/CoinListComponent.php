<?php

namespace App\Livewire\Managecoin;
use App\Models\Coins;

use Livewire\Component;

class CoinListComponent extends Component
{
    public $coins;
    public function mount()
    {
        $this->coins = Coins::all();
    }


    public function render()
    {
        return view('livewire.managecoin.coin-list-component');
    }
}

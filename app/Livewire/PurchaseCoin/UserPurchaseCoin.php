<?php

namespace App\Livewire\PurchaseCoin;

use Livewire\Component;

class UserPurchaseCoin extends Component
{

public function PurchaseCoin()
{
    // Display a message to verify the method is invoked
    dd('Button clicked! Method invoked.');
}

public function render()
{
    return view('livewire.purchase-coin.user-purchase-coin');
}
}

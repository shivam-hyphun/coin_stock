<?php

namespace App\Livewire\PurchaseCoin;

use Livewire\Component;

class UserPurchaseCoin extends Component
{
    public $showForm = false;

    public function purchaseCoin()
    {
        // Display a message to verify the method is invoked
        // dd('Button clicked! Method invoked.');
        $this->showForm = !$this->showForm;
    }

    public function render()
    {
        return view('livewire.purchase-coin.user-purchase-coin')
        ->layout('frontend.layouts.app');
    }
}

<?php

namespace App\Livewire\PurchaseCoin;

use App\Models\Coin_purchase;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserPurchaseCoin extends Component
{
    public $coinId;
    public $coinPrice;
    public $quantity;
    public $totalPrice;
    public $showForm = false;

    protected $listeners = ['updateTotalPrice'];

    public function mount($coinId, $coinPrice)
    {
        $this->coinId = $coinId;
        $this->coinPrice = $coinPrice;
    }

    public function toggleFormVisibility()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            $this->showForm = !$this->showForm;
        } else {
            // If not authenticated, redirect to login page
            return Redirect::route('login');
        }
    }

    public function updateTotalPrice()
    {
        $this->totalPrice = $this->coinPrice * $this->quantity;
    }

    public function save()
    {
        $this->validate([
            'quantity' => 'required|numeric|min:1',
            // You may add more validation rules as needed
        ]);

        // Calculate total price
        $this->totalPrice = $this->coinPrice * $this->quantity;

        // Save form data to the purchase coins table
        Coin_purchase::create([
            'user_id' => Auth::id(),
            'coin_id' => $this->coinId,
            'coin_price' => $this->coinPrice,
            'quantity' => $this->quantity,
            'total_price' => $this->totalPrice,
        ]);

        // Reset form fields and hide the form after saving
        $this->reset(['quantity', 'showForm']);
    }

    public function resetFields()
    {
        // Reset form fields
        $this->quantity = null;
        $this->totalPrice = null;
    }

    public function render()
    {
        return view('livewire.purchase-coin.user-purchase-coin');
    }
}

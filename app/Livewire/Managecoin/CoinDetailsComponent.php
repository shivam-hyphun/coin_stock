<?php

namespace App\Livewire\Managecoin;
use App\Models\Coins;
use App\Models\Links;
use App\Models\Tags;
use Livewire\Component;

class CoinDetailsComponent extends Component
{
    public $coins;
    public function mount($coin)
    {
        $this->coins = Coins::with('tags', 'links')->where('id', $coin)->firstOrFail();
        // dd($this->coins);
    }
    public function render()
    {
        // Pass the $coins data to the view
        return view('frontend.pages.coin-details')
        ->layout('frontend.layouts.app', ['coins' => $this->coins]);
    }
}

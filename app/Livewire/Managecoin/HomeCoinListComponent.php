<?php



namespace App\Livewire\Managecoin;

use Livewire\Component;
use App\Models\Coins;

class HomeCoinListComponent extends Component
{
    public $coins;

    public function mount()
    {
        // Fetch all coins from the database
        $this->coins = Coins::all();

        // Debugging: Uncomment the following line to check fetched coins
        // dd($this->coins);
    }

    public function render()
    {
        // Render the Blade template with the fetched coins
        return view('livewire.managecoin.home-coin-list-component');
    }
}

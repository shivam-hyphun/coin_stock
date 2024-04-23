<?php

namespace App\Livewire\Managecoin;

use Livewire\Component;
use App\Models\Coins;
use App\Models\Links;
use App\Models\Tags;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class ManageCoins extends Component
{
    use WithFileUploads;
    public $coins;

    #[Locked]
    public $coin_id;

    #[Validate('required')]
    public $coin_name = '';

    #[Validate('required')]
    public $short_name = '';

    #[Validate('required')]
    public $coin_price = '';

    #[Validate('required')]
    public $coin_market_capacity = '';

    #[Validate('required')]
    public $coin_volume = '';

    #[Validate('required')]
    public $coin_circulating_supply = '';

    #[Validate('required')]
    public $coin_max_supply = '';

    #[Validate('required')]
    public $coin_fully_diluted_market_cap = '';

    #[Validate('required')]
    public $coin_ucid = '';
    public $coin_links = '';
    public $coin_tags = '';
    public $coin_image = '';

    public $isEdit = false;

    public $title = 'Add New coin';

    public function resetFields()
    {
        $this->title = 'Add New Coin';

        $this->reset('coin_name', 'short_name', 'coin_price', 'coin_market_capacity', 'coin_volume', 'coin_circulating_supply', 'coin_max_supply', 'coin_fully_diluted_market_cap', 'coin_ucid','coin_image');

        $this->isEdit = false;
    }

    public function save()
{
    // Validate input fields
    $this->validate([
        'coin_name' => 'required',
        'short_name' => 'required',
        'coin_price' => 'required',
        'coin_market_capacity' => 'required',
        'coin_volume' => 'required',
        'coin_circulating_supply' => 'required',
        'coin_max_supply' => 'required',
        'coin_fully_diluted_market_cap' => 'required',
        'coin_ucid' => 'required',
        'coin_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // 'tags' => 'nullable|string',
    ]);

    // Create or update coin
    $coinData = [
        'name' => $this->coin_name,
        'short_name' => $this->short_name,
        'price' => $this->coin_price,
        'market_capacity' => $this->coin_market_capacity,
        'volume' => $this->coin_volume,
        'circulating_supply' => $this->coin_circulating_supply,
        'max_supply' => $this->coin_max_supply,
        'fully_diluted_market_cap' => $this->coin_fully_diluted_market_cap,
        'ucid' => $this->coin_ucid,
    ];

    // Handle image upload
    if ($this->coin_image) {
        $imageName = time() . '.' . $this->coin_image->extension();
        $this->coin_image->storeAs('public/coins', $imageName);
        $coinData['image'] = $imageName;
    }

    // Update or create coin
    $coin = Coins::updateOrCreate(['id' => $this->coin_id], $coinData);

    // Handle links
    if (!empty($this->links)) {
        foreach ($this->links as $key => $link) {
            if (!empty($link)) {
                $newLink = new Links();
                $newLink->coin_id = $coin->id; // Use the ID of the created/updated coin
                $newLink->url = $link;
                $newLink->name = $this->links_name[$key] ?? '';
                $newLink->save();
            }
        }
    }

    // Handle tags
    if (!empty($this->tags)) {
        $tags = explode(',', $this->tags);
        foreach ($tags as $tag) {
            if (!empty($tag)) {
                $newTag = new Tags();
                $newTag->coin_id = $coin->id; // Use the ID of the created/updated coin
                $newTag->name = trim($tag);
                $newTag->save();
            }
        }
    }

    session()->flash('success', 'Coin created successfully.');

    $this->resetFields();
}


    public function edit($id)
{
    $this->title = 'Edit Coin';

    $coin = Coins::findOrFail($id);

    // $this->coin_id = $id;
    $this->coin_name = $coin->name;
    $this->short_name = $coin->short_name;
    $this->coin_price = $coin->price;
    $this->coin_market_capacity = $coin->market_capacity;
    $this->coin_volume = $coin->volume;
    $this->coin_circulating_supply = $coin->circulating_supply;
    $this->coin_max_supply = $coin->max_supply;
    $this->coin_fully_diluted_market_cap = $coin->fully_diluted_market_cap;
    $this->coin_ucid = $coin->ucid;

    $this->isEdit = true;
}

    public function cancel()
    {
        $this->resetFields();
    }

    public function delete($id)
    {
        Coins::find($id)->delete();

        session()->flash('message', 'Product is deleted.');
    }



    public function render()
    {
        $this->coins = Coins::with('tags', 'links')->latest()->get();


        return view('livewire.managecoin.manage-coins');
    }
}

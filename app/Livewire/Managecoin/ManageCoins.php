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
    #[Validate('required')]
    public $coin_image;

    public $tags = [];
    public $newTag = '';
    public $isEdit = false;
    public $title = 'Add New coin';

    public $links = [];
    public $newLink = ['url' => '', 'name' => ''];

    public function addLink()
    {
        $this->links[] = $this->newLink;
        $this->newLink = ['url' => '', 'name' => ''];
    }

    public function removeLink($index)
    {
        unset($this->links[$index]);
        $this->links = array_values($this->links);
    }

    public function createTag()
    {
        $this->validate([
            'newTag' => 'required|regex:/^[a-zA-Z0-9\s]*$/',
        ], [
            'newTag.regex' => 'The :attribute may only contain letters, numbers, and spaces.',
        ]);

        if (!empty($this->newTag)) {
            $this->tags[] = $this->newTag;
            $this->newTag = '';
        }
    }

    public function removeTag($tagToRemove)
    {
        $index = array_search($tagToRemove, $this->tags);

        if ($index !== false) {
            unset($this->tags[$index]);
            $this->tags = array_values($this->tags);
        }
    }

    public function resetFields()
    {
        $this->title = 'Add New Coin';

        $this->reset('coin_name', 'short_name', 'coin_price', 'coin_market_capacity', 'coin_volume', 'coin_circulating_supply', 'coin_max_supply', 'coin_fully_diluted_market_cap', 'coin_ucid', 'coin_image', 'tags', 'links');

        $this->isEdit = false;
    }

    public function save()
    {
        $this->validate([
            'coin_name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'short_name' => 'required',
            'coin_price' => 'required|numeric|min:0',
            'coin_market_capacity' => 'required|numeric|min:0',
            'coin_volume' => 'required|numeric|min:0',
            'coin_circulating_supply' => 'required|numeric|min:0',
            'coin_max_supply' => 'required|numeric|min:0',
            'coin_fully_diluted_market_cap' => 'required|numeric|min:0',
            'coin_ucid' => 'required|numeric|min:0',
            'coin_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'coin_name.required' => 'The Coin Name field is required.',
            'coin_name.regex' => 'The Coin Name may only contain letters and spaces.',
            'short_name.required' => 'The Coin Short Name field is required.',
            'coin_price.required' => 'The Coin Price field is required.',
            'coin_price.numeric' => 'The Coin Price must be a number.',
            'coin_price.min' => 'The Coin Price must be greater than or equal to zero.',
            'coin_market_capacity.required' => 'The Coin Market Capacity field is required.',
            'coin_market_capacity.numeric' => 'The Coin Market Capacity must be a number.',
            'coin_market_capacity.min' => 'The Coin Market Capacity must be greater than or equal to zero.',
            'coin_volume.required' => 'The Coin Volume field is required.',
            'coin_volume.numeric' => 'The Coin Volume must be a number.',
            'coin_volume.min' => 'The Coin Volume must be greater than or equal to zero.',
            'coin_circulating_supply.required' => 'The Coin Circulating Supply field is required.',
            'coin_circulating_supply.numeric' => 'The Coin Circulating Supply must be a number.',
            'coin_circulating_supply.min' => 'The Coin Circulating Supply must be greater than or equal to zero.',
            'coin_max_supply.required' => 'The Coin Max Supply field is required.',
            'coin_max_supply.numeric' => 'The Coin Max Supply must be a number.',
            'coin_max_supply.min' => 'The Coin Max Supply must be greater than or equal to zero.',
            'coin_fully_diluted_market_cap.required' => 'The Coin Fully Diluted Market Cap field is required.',
            'coin_fully_diluted_market_cap.numeric' => 'The Coin Fully Diluted Market Cap must be a number.',
            'coin_fully_diluted_market_cap.min' => 'The Coin Fully Diluted Market Cap must be greater than or equal to zero.',
            'coin_ucid.required' => 'The Coin UCID field is required.',
            'coin_ucid.numeric' => 'The Coin UCID must be a number.',
            'coin_ucid.min' => 'The Coin UCID must be greater than or equal to zero.',
            'coin_image.image' => 'The Coin Image must be an image.',
            'coin_image.mimes' => 'The Coin Image must be a file of type: jpeg, png, jpg, gif.',
            'coin_image.max' => 'The Coin Image may not be greater than 2048 kilobytes.',
        ]);

        $coin = Coins::updateOrCreate(['id' => $this->coin_id], [
            'name' => $this->coin_name,
            'short_name' => $this->short_name,
            'price' => $this->coin_price,
            'market_capacity' => $this->coin_market_capacity,
            'volume' => $this->coin_volume,
            'circulating_supply' => $this->coin_circulating_supply,
            'max_supply' => $this->coin_max_supply,
            'fully_diluted_market_cap' => $this->coin_fully_diluted_market_cap,
            'ucid' => $this->coin_ucid,
        ]);

        if ($this->coin_image) {
            $imageName = time() . '.' . $this->coin_image->getClientOriginalExtension();
            $this->coin_image->storeAs('public/coins', $imageName);
            $coin->image = $imageName;
        }


        $coin->save();

        // Clear existing tags associated with the coin
        Tags::where('coin_id', $coin->id)->delete();

        // Save only the tags that are present in the $tags array
        foreach ($this->tags as $tag) {
            $newTag = new Tags();
            $newTag->coin_id = $coin->id;
            $newTag->name = $tag;
            $newTag->save();
        }

        // Clear existing links associated with the coin
        Links::where('coin_id', $coin->id)->delete();

        // Save only the links that are present in the $links array
        foreach ($this->links as $link) {
            $newLink = new Links();
            $newLink->coin_id = $coin->id;
            $newLink->url = $link['url'];
            $newLink->name = $link['name'];
            $newLink->save();
        }

        session()->flash('message', $this->coin_id ? 'Coin is updated.' : 'Coin is added.');

        $this->resetFields();
    }

    public function edit($id)
    {
        $this->title = 'Edit Coin';

        $coin = Coins::findOrFail($id);

        $this->coin_id = $id;
        $this->coin_name = $coin->name;
        $this->short_name = $coin->short_name;
        $this->coin_price = $coin->price;
        $this->coin_market_capacity = $coin->market_capacity;
        $this->coin_volume = $coin->volume;
        $this->coin_circulating_supply = $coin->circulating_supply;
        $this->coin_max_supply = $coin->max_supply;
        $this->coin_fully_diluted_market_cap = $coin->fully_diluted_market_cap;
        $this->coin_ucid = $coin->ucid;

        $this->tags = [];

        $this->links = Links::where('coin_id', $id)->get()->toArray();

        $this->tags = Tags::where('coin_id', $id)->pluck('name')->toArray();

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

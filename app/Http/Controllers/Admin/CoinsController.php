<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Coins;
use App\Models\Links;
use App\Models\Tags;
use Illuminate\Http\Request;

class CoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.mange_coins.create_coins');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'shortname' => 'required',
            'price' => 'required',
            'marketcapacity' => 'required',
            'volume' => 'required',
            'circulatingsupply' => 'required',
            'maxsupply' => 'required',
            'fullydilutedmaketcap' => 'required',
            'ucid' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'links.*' => 'nullable|url',
            'links_name.*' => 'nullable',
            'tags' => 'nullable|string',
        ]);

        // Create coin
        $coin = new Coins();
        $coin->name = $request->name;
        $coin->short_name = $request->shortname;
        $coin->price = $request->price;
        $coin->market_capacity = $request->marketcapacity;
        $coin->volume = $request->volume;
        $coin->circulating_supply = $request->circulatingsupply;
        $coin->max_supply = $request->maxsupply;
        $coin->fully_diluted_market_cap = $request->fullydilutedmaketcap;
        $coin->ucid = $request->ucid;

        // Upload image
        if ($request->hasFile('image')) {
           $imageName = time().'-'.$request->image->extension();
            $request->image->move(public_path('coins'),$imageName);
            $coin->image = $imageName;
        }

        $coin->save();
        // dd($coin->id);

        // Create links
        if ($request->has('links')) {
            foreach ($request->links as $key => $link) {
                if (!empty($link)) {
                    $newLink = new Links();
                    $newLink->coin_id = $coin->id;
                    $newLink->url = $link;
                    $newLink->name = $request->links_name[$key] ?? '';
                    $newLink->save();
                }
            }
        }

        // Create tags
        if ($request->has('tags')) {
            $tags = explode(',', $request->tags);
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    $newTag = new Tags();
                    $newTag->coin_id = $coin->id;
                    $newTag->name = trim($tag);
                    $newTag->save();
                }
            }
        }

        return response()->json(['success' => true, 'message' => 'Coin created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coins $coins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coins $coins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coins $coins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coins $coins)
    {
        //
    }
}

<div class="row justify-content-center mt-3 mb-3">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    {{ $title }}
                </div>
            </div>
            <div class="card-body">
                <form wire:submit="save" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_name">Coin Name</label>
                                <input type="text" class="form-control @error('coin_name') is-invalid @enderror"
                                    id="coin_name" name="coin_name" wire:model="coin_name">
                                @if ($errors->has('coin_name'))
                                    <span class="text-danger">{{ $errors->first('coin_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="short_name">Short Name</label>
                                <input type="text" class="form-control @error('short_name') is-invalid @enderror"
                                    id="short_name" name="short_name" wire:model="short_name">
                                @if ($errors->has('short_name'))
                                    <span class="text-danger">{{ $errors->first('short_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_price">Price</label>
                                <input type="text" class="form-control @error('coin_price') is-invalid @enderror"
                                    id="coin_price" name="coin_price" wire:model="coin_price">
                                @if ($errors->has('coin_price'))
                                    <span class="text-danger">{{ $errors->first('coin_price') }}</span>
                                @endif
                            </div>
                            <!-- Add other form fields -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_market_capacity">Market Capacity</label>
                                <input type="text"
                                    class="form-control @error('coin_market_capacity') is-invalid @enderror"
                                    id="coin_market_capacity" name="coin_market_capacity"
                                    wire:model="coin_market_capacity">
                                @if ($errors->has('coin_market_capacity'))
                                    <span class="text-danger">{{ $errors->first('coin_market_capacity') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_volume">Volume</label>
                                <input type="text" class="form-control @error('coin_volume') is-invalid @enderror"
                                    id="coin_volume" name="coin_volume" wire:model="coin_volume">
                                @if ($errors->has('coin_volume'))
                                    <span class="text-danger">{{ $errors->first('coin_volume') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_circulating_supply">Circulating Supply</label>
                                <input type="text"
                                    class="form-control @error('coin_circulating_supply') is-invalid @enderror"
                                    id="coin_circulating_supply" name="coin_circulating_supply"
                                    wire:model="coin_circulating_supply">
                                @if ($errors->has('coin_circulating_supply'))
                                    <span class="text-danger">{{ $errors->first('coin_circulating_supply') }}</span>
                                @endif
                            </div>
                            <!-- Add other form fields -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="coin_max_supply">Max Supply</label>
                                <input type="text" class="form-control @error('coin_max_supply') is-invalid @enderror"
                                    id="coin_max_supply" name="coin_max_supply" wire:model="coin_max_supply">
                                @if ($errors->has('coin_max_supply'))
                                    <span class="text-danger">{{ $errors->first('coin_max_supply') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="coin_fully_diluted_market_cap">Fully Diluted Market Cap</label>
                                <input type="text"
                                    class="form-control @error('coin_fully_diluted_market_cap') is-invalid @enderror"
                                    id="coin_fully_diluted_market_cap" name="coin_fully_diluted_market_cap"
                                    wire:model="coin_fully_diluted_market_cap">
                                @if ($errors->has('coin_fully_diluted_market_cap'))
                                    <span class="text-danger">{{ $errors->first('coin_fully_diluted_market_cap') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="coin_ucid">UCID</label>
                                <input type="text" class="form-control @error('coin_ucid') is-invalid @enderror"
                                    id="coin_ucid" name="coin_ucid" wire:model="coin_ucid">
                                @if ($errors->has('coin_ucid'))
                                    <span class="text-danger">{{ $errors->first('coin_ucid') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_image">Image</label>
                                <input type="file"
                                    class="form-control-file @error('coin_image') is-invalid @enderror" id="coin_image"
                                    name="coin_image" accept="image/*" wire:model="coin_image">
                                @if ($errors->has('coin_image'))
                                    <span class="text-danger">{{ $errors->first('coin_image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div id="coin_image-preview" class="mt-2" style="width:100px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="coin_links">
                                <div class="form-group">
                                    <label for="coin_links">Links</label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control @error('coin_links') is-invalid @enderror"
                                            name="coin_links[]" placeholder="Link URL"
                                            value="{{ old('coin_links.0') }}">
                                        <input type="text"
                                            class="form-control @error('coin_links_name') is-invalid @enderror"
                                            name="coin_links_name[]" placeholder="Link Name"
                                            value="{{ old('coin_links_name.0') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-success add-link" type="button">+</button>
                                        </div>
                                    </div>
                                    @if ($errors->has('coin_links'))
                                        <span class="text-danger">{{ $errors->first('coin_links') }}</span>
                                    @endif
                                    @if ($errors->has('coin_links_name'))
                                        <span class="text-danger">{{ $errors->first('coin_links_name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="coin_tags">Tags</label>
                                <textarea class="form-control @error('coin_tags') is-invalid @enderror" id="coin_tags" name="coin_tags"
                                    placeholder="Enter tags">{{ old('coin_tags') }}</textarea>
                                @if ($errors->has('coin_tags'))
                                    <span class="text-danger">{{ $errors->first('coin_tags') }}</span>
                                @endif
                            </div>
                            <div id="coin_tags-container" class="my-2">
                                @if (old('coin_tags'))
                                    @foreach (explode(',', old('coin_tags')) as $tag)
                                        <span class="badge badge-primary mr-1">{{ $tag }}<button
                                                type="button" class="close" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button></span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-success">
                            Save
                        </button>
                    </div>

                    @if ($isEdit)
                        <div class="mb-3 row">
                            <button wire:click="cancel" class="col-md-3 offset-md-5 btn btn-danger">
                                Cancel
                            </button>
                        </div>
                    @endif

                    <div class="mb-3 row">
                        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

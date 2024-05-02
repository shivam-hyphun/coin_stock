<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">

                <form wire:submit="save" enctype="multipart/form-data">
                    @csrf
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
                            <div class="form-group">`
                                <label for="short_name">Short Name</label>
                                <input type="text" class="form-control @error('short_name') is-invalid @enderror"
                                    id="short_name" name="short_name" wire:model="short_name">
                                @if ($errors->has('short_name'))
                                    <span class="text-danger">{{ $errors->first('short_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_price">Price</label>
                                <input type="number" class="form-control @error('coin_price') is-invalid @enderror"
                                    id="coin_price" name="coin_price" wire:model="coin_price"  min="1">
                                @if ($errors->has('coin_price'))
                                    <span class="text-danger">{{ $errors->first('coin_price') }}</span>
                                @endif
                            </div>
                            <!-- Add other form fields -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_market_capacity">Market Capacity</label>
                                <input type="number"
                                    class="form-control @error('coin_market_capacity') is-invalid @enderror"
                                    id="coin_market_capacity" name="coin_market_capacity"
                                    wire:model="coin_market_capacity" min="1">
                                @if ($errors->has('coin_market_capacity'))
                                    <span class="text-danger">{{ $errors->first('coin_market_capacity') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_volume">Volume</label>
                                <input type="number" class="form-control @error('coin_volume') is-invalid @enderror"
                                    id="coin_volume" name="coin_volume" wire:model="coin_volume" min="1">
                                @if ($errors->has('coin_volume'))
                                    <span class="text-danger">{{ $errors->first('coin_volume') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="coin_circulating_supply">Circulating Supply</label>
                                <input type="number"
                                    class="form-control @error('coin_circulating_supply') is-invalid @enderror"
                                    id="coin_circulating_supply" name="coin_circulating_supply"
                                    wire:model="coin_circulating_supply"  min="1">
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
                                <input type="number"
                                    class="form-control @error('coin_max_supply') is-invalid @enderror"
                                    id="coin_max_supply" name="coin_max_supply" wire:model="coin_max_supply"  min="1">
                                @if ($errors->has('coin_max_supply'))
                                    <span class="text-danger">{{ $errors->first('coin_max_supply') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="coin_fully_diluted_market_cap">Fully Diluted Market Cap</label>
                                <input type="number"
                                    class="form-control @error('coin_fully_diluted_market_cap') is-invalid @enderror"
                                    id="coin_fully_diluted_market_cap" name="coin_fully_diluted_market_cap"
                                    wire:model="coin_fully_diluted_market_cap"  min="1">
                                @if ($errors->has('coin_fully_diluted_market_cap'))
                                    <span
                                        class="text-danger">{{ $errors->first('coin_fully_diluted_market_cap') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="coin_ucid">UCID</label>
                                <input type="number" class="form-control @error('coin_ucid') is-invalid @enderror"
                                    id="coin_ucid" name="coin_ucid" wire:model="coin_ucid"  min="1">
                                @if ($errors->has('coin_ucid'))
                                    <span class="text-danger">{{ $errors->first('coin_ucid') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="newTag">Add Tags</label>
                                <textarea type="text" wire:model="newTag" wire:keydown.enter.prevent="createTag" class="form-control" rows="2"> </textarea>
                                @if ($errors->has('newTag'))
                                <span class="text-danger">{{ $errors->first('newTag') }}</span>
                                @endif
                            </div>

                            <div>
                                @foreach($tags as $tag)
                                <span class="badge badge-primary">{{ $tag }} <button type="button" wire:click="removeTag('{{ $tag }}')"><i class="fas fa-times"></i></button></span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Column for image upload -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coin_image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('coin_image') is-invalid @enderror" id="coin_image" name="coin_image" accept="image/*" wire:model="coin_image">
                                        <label class="custom-file-label" for="coin_image">Choose file</label>
                                    </div>
                                    @error('coin_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image preview -->
                                @if ($coin_image)
                                    <img src="{{ $coin_image->temporaryUrl() }}" alt="Preview" style="max-width: 20%; margin-top: 10px;">
                                @endif
                            </div>
                        </div>


                        <!-- Column for links -->
                        <div class="col-md-6">
                            <div id="links">
                                <div class="form-group">
                                    <label for="coin_links">Links</label>
                                    @foreach ($links as $index => $link)
                                        <div class="input-group my-2">
                                            <input type="text" wire:model="links.{{ $index }}.url" class="form-control" placeholder="Link URL">
                                            <input type="text" wire:model="links.{{ $index }}.name" class="form-control" placeholder="Link Name">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger" wire:click="removeLink({{ $index }})" type="button">-</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="input-group">
                                        <label class="input-group-text" for="add-link">Add Link</label>
                                        <div class="input-group-append">
                                            <button id="add-link" class="btn btn-success" wire:click="addLink" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('coin_links')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('coin_links_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <button type="submit" class="col-md-1 text-center  mx-2 btn btn-success ">
                            Save
                        </button>

                        @if ($isEdit)
                            <button wire:click="cancel" class="col-md-1 text-center btn btn-danger">
                                Cancel
                            </button>
                        @endif
                    </div>



                    <div class="mb-3 row">
                        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                    </div>


                </form>


            </div>
        </div>
    </div>

</div>

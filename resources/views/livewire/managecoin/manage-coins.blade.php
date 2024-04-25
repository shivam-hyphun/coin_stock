



    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Coins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manage Coins</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

                @include('livewire.managecoin.updateOrCreate')


                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create Coins</h3>

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

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">S#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Short Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Market Capacity</th>
                                            <th scope="col">Volume</th>
                                            <th scope="col">Circulating Supply</th>
                                            <th scope="col">Max Supply</th>
                                            <th scope="col">Fully Diluted Market Cap</th>
                                            <th scope="col">UCID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($coins as $coin)
                                            <tr wire:key="{{ $coin->id }}">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                               
                                                <td>{{ $coin->name }}</td>
                                                <td>{{ $coin->short_name }}</td>
                                                <td>{{ $coin->price }}</td>
                                                <td>{{ $coin->market_capacity }}</td>
                                                <td>{{ $coin->volume }}</td>
                                                <td>{{ $coin->circulating_supply }}</td>
                                                <td>{{ $coin->max_supply }}</td>
                                                <td>{{ $coin->fully_diluted_market_cap }}</td>
                                                <td>{{ $coin->ucid }}</td>
                                                <td>{{ $coin->image }}</td>

                                                <td>
                                                    <button wire:click="edit({{ $coin->id }})"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="bi bi-pencil-square"></i> Edit
                                                    </button>

                                                    <button wire:click="delete({{ $coin->id }})"
                                                        wire:confirm="Are you sure you want to delete this product?"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">
                                                    <span class="text-danger">
                                                        <strong>No Product Found!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div id="successMessage" style="display: none;" class="alert alert-success my-2"
                                    role="alert">
                                    Submitted successfully
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </div>



</div>


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
                <!-- Include livewire managecoin updateOrCreate here -->
                @include('livewire.managecoin.updateOrCreate')
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">
                                <h3 class="card-title">Manage Coins</h3>
                            </div>
                            <div class="col-md-10">
                                @if (session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                        </div>

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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">S#</th>
                                            <th scope="col" class="text-center">Name</th>
                                            <th scope="col" class="text-center">Short Name</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Market Capacity</th>
                                            <th scope="col" class="text-center">Volume</th>
                                            <th scope="col" class="text-center">Circulating Supply</th>
                                            <th scope="col" class="text-center">Max Supply</th>
                                            <th scope="col" class="text-center">Fully Diluted Market Cap</th>
                                            <th scope="col" class="text-center">UCID</th>
                                            <th scope="col" class="text-center">Image</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($coins as $coin)
                                            <tr wire:key="{{ $coin->id }}">
                                                <th scope="row">{{ $loop->iteration }}</th>

                                                <td>{{ $coin->name }}</td>
                                                <td>{{ $coin->short_name }}</td>
                                                <td>{{ number_format($coin->price,2) }}</td>
                                                <td>${{number_format($coin->market_capacity,2) }}</td>
                                                <td>${{ number_format($coin->volume,2)}}</td>
                                                <td>${{number_format( $coin->circulating_supply,2) }}</td>
                                                <td>${{number_format( $coin->max_supply,2) }}</td>
                                                <td>${{number_format( $coin->fully_diluted_market_cap,2) }}</td>
                                                <td>{{$coin->ucid }}</td>
                                                <td>
                                                    @if($coin->image)
                                                        <img src="{{ asset('storage/coins/'.$coin->image) }}" alt="Coin Image" class="img-fluid" style="height:2rem;width:2rem">
                                                    @else
                                                        <p>No image uploaded for this coin.</p>
                                                    @endif
                                                </td>

                                                <td>
                                                    <button wire:click="edit({{ $coin->id }})"
                                                            class="btn btn-primary btn-sm  my-1">
                                                        <i class="fas fa-edit fa-fw"></i>
                                                    </button>

                                                    <button wire:click="delete({{ $coin->id }})"
                                                            wire:confirm="Are you sure you want to delete this Coin?"
                                                            class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt fa-fw"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">
                                                    <span class="text-danger">
                                                        <strong>No Coins Found!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>

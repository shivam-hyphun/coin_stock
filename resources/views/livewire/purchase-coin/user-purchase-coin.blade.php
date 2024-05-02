<!-- resources/views/livewire/purchase-coin/user-purchase-coin.blade.php -->

<div>
    @if ($showForm)
        <!-- Your form HTML goes here -->
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                {{-- <h2 class="text-2xl font-semibold mb-4">Purchase Form</h2> --}}
                <section class="max-w-4xl p-6 mx-auto rounded-md shadow-md border border-gray-300" style="    background-color: #0d1421;">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-200 capitalize">Purchase Coin </h2>

                        <div>
                            <a href="{{ url()->previous() }}"
                                class="text-gray-500 hover:text-gray-700">
                                <i class="ri-arrow-go-back-fill mr-1"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2" style="margin: 60px 5px;">
                            <input type="hidden" wire:model="user_id" value="{{ auth()->id() }}">
                            <input type="hidden" wire:model="coin_id" value="{{ $coinId }}">

                            <div>
                                <label for="coin_price" class="text-gray-200">Price</label>
                                <div class="flex items-center">
                                    <span class="text-gray-600 mr-1">$</span>
                                    <input id="coin_price" type="number"
                                        class="block w-full px-4 py-2 mt-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                        wire:model="coinPrice" readonly>
                                </div>
                            </div>
                            <div>
                                <label for="quantity" class="text-gray-200">Quantity</label>
                                <input id="quantity" type="number"
                                    class="block w-full px-4 py-2 mt-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                    wire:model="quantity" min="1" wire:change="updateTotalPrice">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="total_price" class="text-gray-200">Total Price</label>
                                <div class="flex items-center">
                                    <span class="text-gray-600 mr-1">$</span>
                                    <input id="total_price" type="number"
                                        class="block w-full px-4 py-2 mt-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                        wire:model="totalPrice" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 mx-2">Save</button>
                            <button wire:click="resetFields"
                                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:bg-red-500 mr-4">
                                Cancel
                            </button>
                        </div>

                        <div class="mb-3 row">
                            <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                        </div>
                    </form>



                </section>


            </div>
        </div>
    @else
        <!-- Your button HTML goes here -->
        <div class="flex">
            <button wire:click="toggleFormVisibility"
                class="h-9 w-10 rounded-md border border-gray-700 transition-all duration-200 ease-in-out hover:bg-gray-700">
                <i class="ri-shopping-cart-2-line text-lg text-white"></i>
            </button>
        </div>
    @endif
</div>

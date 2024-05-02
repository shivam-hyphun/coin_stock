<tbody class="w-full">
    @forelse ($coins as $coinPurchase)
        <tr tabindex="0"
            class="h-20 cursor-pointer border-b border-t border-gray-700 bg-dark-black text-sm leading-none text-white hover:bg-dark focus:outline-none">
            <td>
                <a href="{{ route('coin.details', $coinPurchase->coins->id) }}">
                    <div class="flex items-end">
                        <div class="cursor-pointer px-2">
                            <i class="ri-star-line text-base"></i>
                        </div>
                        <div class="pl-2">
                            <p class="text-sm">{{ $loop->iteration }}</p>
                        </div>
                    </div>
                </a>
            </td>
            <td class="cursor-pointer pl-4 pr-10">
                {{-- <a href="{{ route('coin.details', $coinPurchase->coinss->id) }}"> --}}
                    <div class="flex items-center">
                        <div class="h-5 w-5">
                            <img class="h-full w-full" src="{{ asset('storage/coins/' . $coinPurchase->coins->image) }}"
                                alt="{{ $coinPurchase->coins->name }}" />
                        </div>
                        <div class="pl-4">
                            <p class="text-sm font-bold">{{ $coinPurchase->coins->name }}</p>
                        </div>
                    </div>
                </a>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format($coinPurchase->coin_price, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">{{ $coinPurchase->quantity }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format($coinPurchase->total_price, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format(42778.91, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format(42778.91, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format(42778.91, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format($coinPurchase->coins->market_capacity, 2) }}</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">${{ number_format($coinPurchase->coins->volume, 2) }}</p>
                <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks pending</p>
            </td>
            <td class="px-2">
                <p class="text-sm font-medium">{{ number_format($coinPurchase->coins->circulating_supply, 2) }}</p>
                <div class="mt-2 h-1.5 w-24 rounded-full bg-gray-100">
                    <div class="bg-green-progress h-1.5 w-20 rounded-full"></div>
                </div>
            </td>
            <td class="">
                <div class="h-20 w-52 p-2">
                    <canvas id="bitcoinChart"></canvas>
                </div>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="12" class="text-center py-4 text-gray-500">You haven't purchased any coins yet. <a
                    href="/">Buy Coins</a></td>
        </tr>
    @endforelse
</tbody>

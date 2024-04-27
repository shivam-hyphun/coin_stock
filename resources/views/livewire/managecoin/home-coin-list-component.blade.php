@foreach ($coins as $coin)
<tr tabindex="0"
class="h-20 cursor-pointer border-b border-t border-gray-700 bg-dark-black text-sm leading-none text-white hover:bg-dark focus:outline-none">
<td>
    <a href="{{ route('coin-details') }}">
        <div class="flex items-end">
            <div class="cursor-pointer px-2">
                <i class="ri-star-line text-base"></i>
            </div>
            <div class="pl-2">
                <p class="text-sm">1</p>

            </div>
        </div>
    </a>
</td>
<td class="cursor-pointer pl-4 pr-10">
    <a href="{{ route('coin-details') }}">
        <div class="flex items-center">
            <div class="h-5 w-5">
                <img class="h-full w-full" src="{{ asset('storage/coins/'.$coin->image) }}"
                    alt="bitCoin" />
            </div>
            <div class="pl-4">
                <p class="text-sm font-bold">{{ $coin->name }}</p>

            </div>
        </div>
    </a>
</td>
<td class="px-2">
    <p class="text-sm font-medium">${{ $coin->price }}</p>

</td>
<td class="px-2">
    <p class="text-sm font-medium">$42,778.91</p>

</td>

<td class="px-2">
    <p class="text-sm font-medium">$42,778.91</p>

</td>
<td class="px-2">
    <p class="text-sm font-medium">$42,778.91</p>
</td>
<td class="px-2">
    <p class="text-sm font-medium">${{ $coin->market_capacity }}</p>
</td>
<td class="px-2">
    <p class="text-sm font-medium">${{ $coin->volume }}</p>
    <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks pending</p>
</td>
<td class="px-2">
    <p class="text-sm font-medium">{{ $coin->circulating_supply }}</p>
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

@endforeach


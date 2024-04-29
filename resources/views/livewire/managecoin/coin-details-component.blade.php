<div class="mx-auto flex w-full max-w-8xl flex-col items-center justify-between gap-3 gap-x-8 md:flex-row">
    <div class="flex w-full flex-col gap-2 md:w-2/3">
        <div class="w-full">
            <span class="whitespace-nowrap rounded-full bg-gray-700 px-2.5 py-1.5 text-sm text-white">
                Rank #1
            </span>
        </div>
        <div class="flex w-full items-center justify-start gap-2">
            <div class="h-10 w-10">
                <img class="h-full w-full" src="{{ asset('storage/coins/' . $coins->image) }}" alt="coin image" />
            </div>
            <h6 class="font-bold text-gray-300">{{ $coins->name }} </h6>
            <p class="text-sm font-light">{{ $coins->short_name }} Price</p>

        </div>
        <div class="flex w-full items-center justify-start gap-2">
            <h4 class="font-bold">${{ number_format($coins->price, 2) }}</h4>
            <span class="flex flex-row items-center gap-1"><i
                    class="ri-arrow-drop-down-fill text-3xl text-danger"></i>
                <span class="text-danger">5.4%</span></span>

            <i class="ri-information-line text-xl text-gray-700"></i>
        </div>
        <div class="flex w-full items-center justify-start gap-2">
            <p class="text-sm">1.0000 {{ $coins->short_name }} 0.0%</p>
            <span class="flex flex-row items-center gap-1">
                <span class="text-danger">5.4%</span>
                <i class="ri-corner-right-up-line text-xl text-danger"></i>
            </span>


        </div>
        <div class="flex w-full items-center justify-start gap-2">
            <div class="flex">
                <button
                    class="h-9 w-10 rounded-md border border-gray-700 transition-all duration-200 ease-in-out hover:bg-gray-700">
                    <i class="ri-share-forward-box-fill text-lg text-white"></i>
                </button>
            </div>
            <div class="flex">
                <button
                    class="h-9 w-10 rounded-md border border-gray-700 transition-all duration-200 ease-in-out hover:bg-gray-700">
                    <i class="ri-notification-4-line text-lg text-white"></i>
                </button>
            </div>
            <div class="flex">
                <button
                    class="h-9 w-10 rounded-md border border-gray-700 transition-all duration-200 ease-in-out hover:bg-gray-700">
                    <i class="ri-star-line text-lg text-white"></i>
                </button>
            </div>
            <div class="flex">
                <span class="whitespace-nowrap rounded-full bg-gray-700 px-2.5 py-1 text-sm text-white">
                    <i class="ri-star-fill text-yellow-400"></i> on 1,432,410 watchlists
                </span>
            </div>
        </div>

        <div class="flex w-full items-center justify-start gap-2">
            <div class="relative h-16 w-full py-5 md:w-1/2">
                <span id="ProgressLabel" class="sr-only">Loading</span>

                <span role="progressbar" aria-labelledby="ProgressLabel" aria-valuenow="75"
                    class="block rounded-full bg-gray-200">
                    <span
                        class="block h-2 rounded-full bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%"
                        style="width: 75%"></span>
                </span>
                <div class="absolute bottom-0 left-0 pt-5">
                    <p class="text-sm">$41,746.90</p>
                </div>
                {{--  75%  --}}
                <div class="absolute bottom-0 left-[50%] pt-5">
                    <p class="text-sm">24h Range</p>
                </div>


                <div class="absolute bottom-0 right-0 pt-5">
                    <p class="text-sm">$41,746.90</p>
                </div>
            </div>
        </div>
        <div class="flex w-full items-center justify-start gap-2">
            <div class="grid w-full grid-cols-2 gap-1 gap-x-5">
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">Market Cap </span>
                    <span class="text-gray-300">${{ number_format($coins->market_capacity, 2) }}</span>

                </div>
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">Circulating Supply</span>
                    <span class="text-gray-300">{{ number_format($coins->circulating_supply) }} </span>

                </div>
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">24 Hour Trading Vol</span>
                    <span class="text-gray-300">$19,214,491,015</span>

                </div>
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">Total Supply</span>
                    <span class="text-gray-300">21,000,000</span>

                </div>
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">Fully Diluted Valuation</span>
                    <span class="text-gray-300">${{ number_format($coins->fully_diluted_market_cap, 2) }}</span>

                </div>
                <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                    <span class="text-gray-500">Max Supply</span>
                    <span class="text-gray-300">{{ number_format($coins->max_supply, 2) }}</span>

                </div>

            </div>

        </div>


    </div>

    <div class="flex w-full flex-col gap-2 md:w-1/3">
        <p class="text-lg font-bold">Info</p>
        <div class="flex w-full items-center gap-1">
            <p class="w-1/5 text-base">Website</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                @foreach ($coins->links as $link)
                <a href="{{ $link->url }}"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">{{ $link->name }}</a>

        @endforeach
            </div>



        </div>
        <div class="flex w-full items-center gap-1">
            <p class="w-1/5 text-base">Explorers</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">bitcoin.org</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">white-paper</a>
            </div>



        </div>
        <div class="flex w-full flex-1 items-start gap-1">
            <p class="w-1/5 text-base">Wallets</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Ladzer</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Trezar</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Meta
                    Mask</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Etc</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Ladzer</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Trezar</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Meta
                    Mask</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Etc</a>
            </div>


        </div>
        <div class="flex w-full items-start gap-1">
            <p class="w-1/5 text-base">Community</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">
                    <i class="ri-twitter-x-line"></i>
                    twitter</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100"><i
                        class="ri-facebook-circle-line"></i>
                    facebook</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Meta
                    Mask</a>

            </div>


        </div>
        <div class="flex w-full items-start gap-1">
            <p class="w-1/5 whitespace-nowrap text-base">Search on</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">
                    <i class="ri-search-2-line"></i>
                    twitter</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">
                    <i class="ri-search-2-line"></i>
                    Google</a>
                <a href="#"
                    class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">Meta
                    Mask</a>

            </div>
        </div>
        <div class="flex w-full items-start gap-1">
            <p class="w-1/5 whitespace-nowrap text-base">Tags</p>
            <div class="flex w-4/5 flex-wrap gap-1">
                @foreach ($coins->tags as $tag)
                <a href="#"
                class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">
                {{ $tag->name }}</a>
        @endforeach


            </div>


        </div>



    </div>

</div>

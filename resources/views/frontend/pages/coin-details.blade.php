@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen flex-col items-center justify-start gap-2 px-4 py-2 md:px-4">
        <div class="w-full">
            <nav aria-label="Breadcrumb">
                <ol class="flex items-center gap-1 text-sm text-gray-600">



                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Cryptocurrencies </a>
                    </li>

                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Bitcoin Price </a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="mx-auto flex w-full max-w-8xl flex-col items-center justify-between gap-3 gap-x-8 md:flex-row">
            <div class="flex w-full flex-col gap-2 md:w-2/3">
                <div class="w-full">
                    <span class="whitespace-nowrap rounded-full bg-gray-700 px-2.5 py-1.5 text-sm text-white">
                        Rank #1
                    </span>
                </div>
                <div class="flex w-full items-center justify-start gap-2">
                    <div class="h-10 w-10">
                        <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
                    </div>
                    <h6 class="font-bold text-gray-300">Bitcoin </h6>
                    <p class="text-sm font-light">BTC Price</p>

                </div>
                <div class="flex w-full items-center justify-start gap-2">
                    <h4 class="font-bold">$43,185.66</h4>
                    <span class="flex flex-row items-center gap-1"><i
                            class="ri-arrow-drop-down-fill text-3xl text-danger"></i>
                        <span class="text-danger">5.4%</span></span>

                    <i class="ri-information-line text-xl text-gray-700"></i>
                </div>
                <div class="flex w-full items-center justify-start gap-2">
                    <p class="text-sm">1.0000 BTC 0.0%</p>
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
                            <span class="text-gray-300">$833,618,766,055 </span>

                        </div>
                        <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                            <span class="text-gray-500">Circulating Supply</span>
                            <span class="text-gray-300">19,599,081 </span>

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
                            <span class="text-gray-300">$893,204,844,000</span>

                        </div>
                        <div class="div flex justify-between border-b border-gray-700 py-2 text-sm">
                            <span class="text-gray-500">Max Supply</span>
                            <span class="text-gray-300">21,000,000</span>

                        </div>

                    </div>

                </div>


            </div>

            <div class="flex w-full flex-col gap-2 md:w-1/3">
                <p class="text-lg font-bold">Info</p>
                <div class="flex w-full items-center gap-1">
                    <p class="w-1/5 text-base">Website</p>
                    <div class="flex w-4/5 flex-wrap gap-1">
                        <a href="#"
                            class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">bitcoin.org</a>
                        <a href="#"
                            class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">white-paper</a>
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
                    <p class="w-1/5 whitespace-nowrap text-base">Categories</p>
                    <div class="flex w-4/5 flex-wrap gap-1">
                        <a href="#"
                            class="ml-2 rounded-lg bg-gray-700 px-2 py-0.5 text-sm text-white hover:text-gray-100">
                            Cryptocurrency</a>


                    </div>


                </div>



            </div>

        </div>
        <div class="mx-auto flex w-full max-w-8xl items-center justify-between gap-3 gap-x-8">
            <div x-data="{ selectedTab: 'Overview', tabItems: ['Overview', 'Markets', 'Historical Data', 'Tokenomics'] }" class="w-full">
                <div class="mx-auto">
                    <div class="flex w-full items-center gap-x-3 overflow-x-auto border-b border-gray-700 text-sm"
                        aria-label="Manage your account">
                        <template x-for="(item, index) in tabItems" :key="index">
                            <button @click="selectedTab = item"
                                :class="{
                                    'border-indigo-600 text-indigo-600': selectedTab ===
                                        item,
                                    'border-transparent text-gray-500': selectedTab !== item
                                }"
                                class="group border-b-2 py-1.5 outline-none">
                                <div class="rounded-lg px-3 py-1.5 font-medium duration-150 group-hover:bg-gray-700 group-hover:text-white group-active:bg-gray-700"
                                    x-text="item">
                                </div>
                            </button>
                        </template>
                    </div>
                    <div x-show="selectedTab === 'Overview'" class="py-6">
                        <div class="flex w-full flex-col gap-3 md:flex-row">
                            {{--  ?  Chart Data  --}}
                            <div class="h-128 w-full p-2 md:w-2/3">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container" style="height:100%;width:100%">
                                    <div class="tradingview-widget-container__widget"
                                        style="height:calc(100% - 32px);width:100%"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/"
                                            rel="noopener nofollow" target="_blank"><span class="blue-text">Track all
                                                markets on TradingView</span></a></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                        {
                                            "autosize": true,
                                            "symbol": "NASDAQ:AAPL",
                                            "interval": "D",
                                            "timezone": "Etc/UTC",
                                            "theme": "dark",
                                            "style": "2",
                                            "locale": "in",
                                            "enable_publishing": false,
                                            "allow_symbol_change": true,
                                            "support_host": "https://www.tradingview.com"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->

                            </div>
                            <div class="w-full md:w-1/3">
                                <div class="h-52 w-full rounded-lg bg-trinary p-3">
                                    <div class="flex w-full flex-col gap-3 p-4">
                                        <div class="flex justify-between pb-5">
                                            <p class="text-base font-semibold">Treding Coin</p>
                                            <p
                                                class="flex cursor-pointer items-center justify-start text-sm text-primary hover:text-primary-light">
                                                More <i class="ri-arrow-drop-right-fill text-xl text-primary"></i></p>

                                        </div>
                                        {{--  ?  List  --}}
                                        <div class="flex w-full justify-between">
                                            <div class="flex gap-1">
                                                <small class="pr-4 text-sm font-semibold text-gray-400">1</small>
                                                <div class="h-5 w-5">
                                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}"
                                                        alt="bitCoin" />
                                                </div>
                                                <p class="text-sm font-semibold text-gray-400">Bitcoin</p>
                                            </div>
                                            <div class="flex items-center">

                                                <i class="ri-arrow-drop-up-line text-xl text-success"></i>
                                                <p class="text-sm font-semibold text-success">$12546,256</p>
                                            </div>
                                        </div>

                                        <div class="flex w-full justify-between">
                                            <div class="flex gap-1">
                                                <small class="pr-4 text-sm font-semibold text-gray-400">2</small>
                                                <div class="h-5 w-5">
                                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}"
                                                        alt="bitCoin" />
                                                </div>
                                                <p class="text-sm font-semibold text-gray-400">Bitcoin</p>
                                            </div>
                                            <div class="flex items-center">

                                                <i class="ri-arrow-drop-down-line text-xl text-danger"></i>
                                                <p class="text-sm font-semibold text-danger">$12546,256</p>
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-between">
                                            <div class="flex gap-1">
                                                <small class="pr-4 text-sm font-semibold text-gray-400">3</small>
                                                <div class="h-5 w-5">
                                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}"
                                                        alt="bitCoin" />
                                                </div>
                                                <p class="text-sm font-semibold text-gray-400">Bitcoin</p>
                                            </div>
                                            <div class="flex items-center">

                                                <i class="ri-arrow-drop-up-line text-xl text-success"></i>
                                                <p class="text-sm font-semibold text-success">$12546,256</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div x-show="selectedTab === 'Markets'" class="py-6">
                        <div class="h-full w-full">
                            <div class="pb-5 pt-4 shadow">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr tabindex="0"
                                            class="h-16 w-full text-sm leading-none text-gray-800 focus:outline-none">
                                            <th class="pl-4 text-right font-normal">#</th>
                                            <th class="pl-4 text-left font-normal">Name</th>
                                            <th class="px-2 text-left font-normal">Price</th>
                                            <th class="px-2 text-left font-normal">1h %</th>
                                            <th class="px-2 text-left font-normal">24h%</th>
                                            <th class="px-2 text-left font-normal">7D%</th>
                                            <th class="px-2 text-left font-normal">Market Cap</th>
                                            <th class="px-2 text-left font-normal">Volume</th>
                                            <th class="px-2 text-left font-normal">Circulating Supply</th>
                                            <th class="px-2 text-left font-normal">Last 7 Days</th>
                                        </tr>
                                    </thead>
                                    <tbody class="w-full">
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
                                                            <img class="h-full w-full"
                                                                src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
                                                        </div>
                                                        <div class="pl-4">
                                                            <p class="text-sm font-bold">Bitcoin</p>

                                                        </div>
                                                    </div>
                                                </a>
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
                                                <p class="text-sm font-medium">$42,778.91</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
                                                <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks
                                                    pending</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
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
                                        <tr tabindex="0"
                                            class="h-20 border-b border-t border-gray-700 bg-dark-black text-sm leading-none text-white hover:bg-dark focus:outline-none">
                                            <td>
                                                <div class="flex items-end">
                                                    <div class="cursor-pointer px-2">
                                                        <i class="ri-star-line text-base"></i>
                                                    </div>
                                                    <div class="pl-2">
                                                        <p class="text-sm">2</p>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cursor-pointer pl-4 pr-10">
                                                <div class="flex items-center">
                                                    <div class="h-5 w-5">
                                                        <img class="h-full w-full"
                                                            src="{{ asset('images/ethereum.svg') }}" alt="ethereum" />
                                                    </div>
                                                    <div class="pl-4">
                                                        <p class="text-sm font-bold">Ethereum</p>

                                                    </div>
                                                </div>
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
                                                <p class="text-sm font-medium">$42,778.91</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
                                                <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks
                                                    pending</p>
                                            </td>
                                            <td class="px-2">
                                                <p class="text-sm font-medium">$42,778.91</p>
                                                <div class="mt-2 h-1.5 w-24 rounded-full bg-gray-100">
                                                    <div class="bg-green-progress h-1.5 w-20 rounded-full"></div>
                                                </div>
                                            </td>

                                            <td class="">
                                                <div class="h-20 w-52 p-2">

                                                    <canvas id="ethereumChart"></canvas>

                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush

@extends('frontend.layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-start gap-2 px-4 py-2 md:px-2">

        @include('frontend.common.list-data')

        {{--  <div class="mx-auto flex w-full max-w-8xl items-center justify-between gap-3">
            <div class="div">
                <p class="font-bold text-white">Today's Cryptocurrency Prices by Market Cap</p>
                <h6 class="text-sm font-semibold text-gray-400">The global crypto market cap is $1.57T, a
                    <span class="text-danger">
                        <i class="ri-arrow-drop-down-fill text-base text-danger"></i>
                        <span class="text-danger">1.39%</span>
                    </span> increase over
                    the last day.
                </h6>
            </div>
            <div class="hidden md:flex">
                <div class="relative flex flex-wrap items-center gap-5">
                    <label
                        class="cursor-pointer pr-2 text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400"
                        for="id-c04s">
                        Highlight
                    </label>
                    <input
                        class="hover:ring-gary-300 peer relative h-6 w-12 cursor-pointer appearance-none rounded-xl ring-2 ring-inset ring-slate-300 transition-colors after:absolute after:left-0 after:top-0 after:h-6 after:w-6 after:rounded-full after:bg-white after:ring-2 after:ring-inset after:ring-slate-500 after:transition-all checked:bg-emerald-200 checked:ring-emerald-500 checked:after:left-6 checked:after:bg-white checked:after:ring-emerald-500 after:hover:ring-slate-600 checked:hover:bg-emerald-300 checked:hover:ring-emerald-600 checked:after:hover:ring-emerald-600 checked:focus:bg-emerald-400 checked:focus:ring-emerald-700 checked:after:focus:ring-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-200 disabled:after:ring-slate-300"
                        type="checkbox" value="" id="id-c04s" />

                </div>
            </div>
        </div>  --}}

        {{--  <div class="mx-auto flex w-full max-w-8xl items-center justify-between gap-3">
            <div class="div">
                <p class="font-bold text-white">Today's Cryptocurrency Prices by Market Cap</p>
                <h6 class="text-sm font-semibold text-gray-400">The global crypto market cap is $1.57T, a
                    <span class="text-danger">
                        <i class="ri-arrow-drop-down-fill text-base text-danger"></i>
                        <span class="text-danger">1.39%</span>
                    </span> increase over
                    the last day.
                </h6>
            </div>
            <div class="hidden md:flex">
               View More
            </div>
        </div>  --}}
        {{--  <div class="mx-auto flex w-full max-w-8xl items-center justify-between gap-3 py-5">
            <div class="grid w-full grid-cols-1 gap-2 md:grid-cols-3">
                <div class="h-52 w-full rounded-lg bg-trinary">
                    <div class="flex w-full flex-col gap-3 p-4">
                        <div class="flex justify-between pb-5">
                            <p class="text-base font-semibold">Treding Coin</p>
                            <p
                                class="flex cursor-pointer items-center justify-start text-sm text-primary hover:text-primary-light">
                                More <i class="ri-arrow-drop-right-fill text-xl text-primary"></i></p>

                        </div>

                        <div class="flex w-full justify-between">
                            <div class="flex gap-1">
                                <small class="pr-4 text-sm font-semibold text-gray-400">1</small>
                                <div class="h-5 w-5">
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                <div class="h-52 w-full rounded-lg bg-trinary">
                    <div class="flex w-full flex-col gap-3 p-4">
                        <div class="flex justify-between pb-5">
                            <p class="text-base font-semibold">Treding Coin</p>
                            <p
                                class="flex cursor-pointer items-center justify-start text-sm text-primary hover:text-primary-light">
                                More <i class="ri-arrow-drop-right-fill text-xl text-primary"></i></p>

                        </div>

                        <div class="flex w-full justify-between">
                            <div class="flex gap-1">
                                <small class="pr-4 text-sm font-semibold text-gray-400">1</small>
                                <div class="h-5 w-5">
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                <div class="h-52 w-full rounded-lg bg-trinary">
                    <div class="flex w-full flex-col gap-3 p-4">
                        <div class="flex justify-between pb-5">
                            <p class="text-base font-semibold">Treding Coin</p>
                            <p
                                class="flex cursor-pointer items-center justify-start text-sm text-primary hover:text-primary-light">
                                More <i class="ri-arrow-drop-right-fill text-xl text-primary"></i></p>

                        </div>

                        <div class="flex w-full justify-between">
                            <div class="flex gap-1">
                                <small class="pr-4 text-sm font-semibold text-gray-400">1</small>
                                <div class="h-5 w-5">
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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
                                    <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}" alt="bitCoin" />
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

        </div>  --}}
        <div class="mx-auto flex w-full max-w-8xl flex-col items-center justify-between gap-3 py-5">
            {{-- Table top Start  --}}
            <div class="w-full flex-wrap justify-between rounded shadow sm:block">
                <div
                    class="-b m:pl-5 flex h-full flex-col-reverse justify-between gap-2 md:h-12 md:flex-row md:gap-1 md:pr-5 xl:mx-0 xl:w-full">
                    <ul class="flex h-full items-center gap-2 overflow-auto py-2">
                        <li onkeypress="activeTab(this)" tabindex="0" onclick="activeTab(this)"
                            class="rounded px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none"
                            data-id="tab-1">Cyrptocurrency</li>

                        <li onkeypress="activeTab(this)" tabindex="0" onclick="activeTab(this)"
                            class="rounded px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none">
                            Categories</li>
                        <li onkeypress="activeTab(this)" tabindex="0" onclick="activeTab(this)"
                            class="rounded px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none">
                            Peppyme</li>
                        <li onkeypress="activeTab(this)" tabindex="0" onclick="activeTab(this)"
                            class="rounded px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none">
                            Bitcoin</li>
                    </ul>
                    <ul class="flex h-full items-center gap-2">
                        <li class="hidden text-sm text-gray-300 md:block">Show rows</li>
                        <li tabindex="0"
                            class="relative hidden rounded bg-trinary px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none md:block"
                            data-id="tab-1">
                            <div class="">
                                <p class="cursor-pointer text-sm font-semibold leading-3 tracking-normal text-white"
                                    data-menu>
                                    100 <i class="ri-arrow-down-s-line text-base"></i>
                                </p>
                                <ul
                                    class="invisible absolute mt-2 w-20 rounded bg-gray-800 object-left-top py-1 opacity-0 shadow transition duration-300">
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        100
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        50
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        20
                                    </li>



                                </ul>
                            </div>
                        </li>

                        <li tabindex="0"
                            class="relative rounded bg-trinary px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none"
                            data-id="tab-1">
                            <div class="">
                                <p class="flex cursor-pointer items-center text-sm font-semibold leading-3 tracking-normal text-white"
                                    data-menu>
                                    <i class="ri-equalizer-line text-base"></i> Filter
                                </p>
                                <ul
                                    class="invisible absolute mt-2 w-20 rounded bg-gray-800 object-left-top py-1 opacity-0 shadow transition duration-300">
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        100
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        50
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        20
                                    </li>



                                </ul>
                            </div>
                        </li>
                        <li tabindex="0"
                            class="relative rounded bg-trinary px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none"
                            data-id="tab-1">
                            <div class="">
                                <p class="flex cursor-pointer items-center text-sm font-semibold leading-3 tracking-normal text-white"
                                    data-menu>
                                    <i class="ri-pages-line text-base"></i> Customize
                                </p>
                                <ul
                                    class="invisible absolute mt-2 w-20 rounded bg-gray-800 object-left-top py-1 opacity-0 shadow transition duration-300">
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        100
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        50
                                    </li>
                                    <li tabindex="0"
                                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                        20
                                    </li>



                                </ul>
                            </div>
                        </li>
                        <li tabindex="0"
                            class="rounded bg-trinary px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none"
                            data-id="tab-1">
                            <i class="ri-align-justify text-base"></i>

                        </li>
                        <li tabindex="0"
                            class="rounded bg-trinary px-5 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 focus:outline-none"
                            data-id="tab-1">
                            <i class="ri-layout-2-line text-base"></i>

                        </li>
                    </ul>
                </div>
            </div>
            {{-- Table top Start  --}}
            {{-- Table Start  --}}
            <div class="w-full">
                <div class="overflow-y-auto pb-5 pt-4 shadow">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr tabindex="0"
                                class="h-16 w-full text-sm leading-none text-gray-800 focus:outline-none dark:text-white">
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
                                                <img class="h-full w-full" src="{{ asset('images/bit-coin.svg') }}"
                                                    alt="bitCoin" />
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
                                    <p class="mt-2 text-xs leading-3 text-gray-600 dark:text-gray-200">5 tasks pending</p>
                                </td>
                                <td class="px-2">
                                    <p class="text-sm font-medium">$42,778.91</p>
                                    <div class="mt-2 h-1.5 w-24 rounded-full bg-gray-100 dark:bg-gray-700">
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
                                            <img class="h-full w-full" src="{{ asset('images/ethereum.svg') }}"
                                                alt="ethereum" />
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
                                    <p class="mt-2 text-xs leading-3 text-gray-600 dark:text-gray-200">5 tasks pending</p>
                                </td>
                                <td class="px-2">
                                    <p class="text-sm font-medium">$42,778.91</p>
                                    <div class="mt-2 h-1.5 w-24 rounded-full bg-gray-100 dark:bg-gray-700">
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
            {{-- Table End  --}}

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bitcoinData = generateRandomData(25); // Replace with actual Bitcoin data
            const ethereumData = generateRandomData(25); // Replace with actual Ethereum data

            createChart('bitcoinChart', bitcoinData, 'rgb(255, 99, 132)');
            createChart('ethereumChart', ethereumData, 'rgb(54, 162, 235)');

            // Add more cryptocurrencies with their data as needed
        });

        function createChart(chartId, data, borderColor) {
            const ctx = document.getElementById(chartId).getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [...Array(data.length).keys()],
                    datasets: [{
                        data: data,
                        fill: false,
                        borderColor: borderColor,
                        tension: 0.1,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        x: {
                            display: false
                        },
                        y: {
                            display: false
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    },
                    maintainAspectRatio: false
                }
            });
        }

        function generateRandomData(count) {
            return Array.from({
                length: count
            }, () => Math.floor(Math.random() * 50));
        }
    </script>
@endpush

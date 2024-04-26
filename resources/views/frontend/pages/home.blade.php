@extends('frontend.layouts.app')

@section('content')

    <div class="flex flex-col items-center justify-start gap-2 px-4 py-2 md:px-2">

        @include('frontend.common.list-data')

       
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
                                    <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks pending</p>
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
                                    <p class="mt-2 text-xs leading-3 text-gray-600">5 tasks pending</p>
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

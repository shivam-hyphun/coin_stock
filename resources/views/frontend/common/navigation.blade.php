<div class="mx-auto flex w-full max-w-8xl flex-col-reverse divide-y divide-gray-700 px-4 md:flex-col">

    {{--
    <div class="mx-auto flex w-full justify-between overflow-auto bg-dark-black md:overflow-hidden">
        <div class="flex max-w-full gap-2 overflow-auto px-2 py-2">
            <div class="flex items-center gap-1">
                <span class="whitespace-nowrap text-sm">Crypto:</span>
                <span
                    class="cursor-pointer whitespace-nowrap font-semibold text-primary hover:text-primary-light">2M+</span>
            </div>
            <div class="flex items-center gap-1">
                <span class="whitespace-nowrap text-sm">Exchanges:</span>
                <span
                    class="cursor-pointer whitespace-nowrap font-semibold text-primary hover:text-primary-light">678</span>
            </div>
            <div class="flex items-center gap-1">
                <span class="whitespace-nowrap text-sm">Market Cap:</span>
                <span
                    class="cursor-pointer whitespace-nowrap font-semibold text-primary hover:text-primary-light">$1.77T</span>
                <span class="flex text-success">
                    <i class="ri-arrow-drop-up-fill text-base text-success"></i>
                    <span class="whitespace-nowrap text-success">1.39%</span>
                </span>

            </div>
            <div class="flex items-center gap-1">
                <span class="whitespace-nowrap text-sm">24h Vol:</span>
                <span
                    class="cursor-pointer whitespace-nowrap font-semibold text-primary hover:text-primary-light">$98.55</span>
                <span class="flex text-danger">
                    <i class="ri-arrow-drop-down-fill text-base text-danger"></i>
                    <span class="whitespace-nowrap text-danger">1.39%</span>
                </span>
            </div>
            <div class="flex items-center gap-1">
                <span class="whitespace-nowrap text-sm">Dominance:</span>
                <span class="cursor-pointer whitespace-nowrap font-semibold text-primary hover:text-primary-light">BTC:
                    51.1% ETH:
                    17.7%</span>
            </div>

        </div>
        <div class="hidden justify-end gap-2 px-2 py-2 md:flex">
            <div class="relative">
                <a href="{{ route('submit-request') }}"
                    class="flex w-40 cursor-pointer justify-between rounded border border-gray-700 bg-trinary focus:outline-none focus:ring-gray-500"
                    data-menu>
                    <p class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400">
                        Get Listed
                    </p>
                    <div class="flex items-center rounded-r border-l border-gray-700 bg-trinary py-1">
                        <div class="mx-3 flex cursor-pointer items-center text-gray-400">
                            <i class="ri-arrow-drop-down-line text-2xl text-gray-400"></i>

                        </div>
                    </div>
                </a>
                <ul
                    class="invisible absolute z-40 mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-eth-line"></i>

                        <span class="ml-2 font-normal">CyptoCurrency</span>
                    </li>
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-arrow-left-right-line"></i>

                        <span class="ml-2 font-normal">Exchange</span>
                    </li>


                    <li>
                        <hr class="my-1 border-gray-700" />
                    </li>


                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-loop-left-line"></i>
                        <span class="ml-2">Page Updates</span>
                    </li>
                </ul>


            </div>
            <button
                class="rounded border border-gray-700 bg-trinary px-6 py-2 text-xs text-gray-300 transition duration-150 ease-in-out hover:bg-trinary hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2">Login</button>
            <button
                class="rounded bg-primary px-6 py-2 text-xs text-white transition duration-150 ease-in-out hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Sign
                up</button>


        </div>
    </div>
    --}}

    <div class="mx-auto flex w-full max-w-8xl justify-between bg-dark-black py-2">
        <div class="flex max-w-full items-center justify-between gap-3 px-2 py-2 md:justify-start">
            <div class="flex items-center justify-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-44">
                </a>
            </div>
            <div class="hidden h-full md:flex md:flex-1">
                <div class="flex h-full items-center px-4">
                    <div class="relative h-full py-4" data-menu>
                        <p class="h-full cursor-pointer text-base font-semibold leading-3 tracking-normal text-white">
                            Cryptocurrency
                        </p>
                        <ul
                            class="invisible absolute mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none"
                                data-submenu>
                                <div class="w-full">
                                    <i class="ri-eth-line"></i>

                                    <span class="ml-2 font-normal">CyptoCurrency</span>
                                </div>

                                <div class="relative">
                                    <ul
                                        class="invisible absolute mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                                        <li tabindex="0"
                                            class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                            <i class="ri-eth-line"></i>

                                            <span class="ml-2 font-normal">CyptoCurrency</span>
                                        </li>
                                        <li tabindex="0"
                                            class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                            <i class="ri-arrow-left-right-line"></i>

                                            <span class="ml-2 font-normal">Exchange</span>
                                        </li>


                                        <li>
                                            <hr class="my-1 border-gray-700" />
                                        </li>


                                        <li tabindex="0"
                                            class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                            <i class="ri-loop-left-line"></i>
                                            <span class="ml-2">Page Updates</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-arrow-left-right-line"></i>

                                <span class="ml-2 font-normal">Exchange</span>
                            </li>


                            <li>
                                <hr class="my-1 border-gray-700" />
                            </li>


                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-loop-left-line"></i>
                                <span class="ml-2">Page Updates</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center px-4">
                    <div class="relative h-full py-4" data-menu>
                        <p class="cursor-pointer text-base font-semibold leading-3 tracking-normal text-white">
                            Exchange
                        </p>
                        <ul
                            class="invisible absolute mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-eth-line"></i>

                                <span class="ml-2 font-normal">CyptoCurrency</span>
                            </li>
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-arrow-left-right-line"></i>

                                <span class="ml-2 font-normal">Exchange</span>
                            </li>


                            <li>
                                <hr class="my-1 border-gray-700" />
                            </li>


                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-loop-left-line"></i>
                                <span class="ml-2">Page Updates</span>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="flex items-center px-4">
                    <div class="relative h-full py-4">
                        <p class="cursor-pointer text-base font-semibold leading-3 tracking-normal text-white">
                            Startup
                        </p>
                    </div>


                </div>
                <div class="flex items-center px-4">
                    <div class="relative h-full py-4" data-menu>
                        <p class="cursor-pointer text-base font-semibold leading-3 tracking-normal text-white">
                            Products
                        </p>
                        <ul
                            class="invisible absolute mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-eth-line"></i>

                                <span class="ml-2 font-normal">CyptoCurrency</span>
                            </li>
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-arrow-left-right-line"></i>

                                <span class="ml-2 font-normal">Exchange</span>
                            </li>


                            <li>
                                <hr class="my-1 border-gray-700" />
                            </li>


                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-loop-left-line"></i>
                                <span class="ml-2">Page Updates</span>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="flex items-center px-4">
                    <div class="relative h-full py-4" data-menu>
                        <p class="cursor-pointer text-base font-semibold leading-3 tracking-normal text-white">
                            Learn
                        </p>
                        <ul
                            class="invisible absolute mt-2 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-eth-line"></i>

                                <span class="ml-2 font-normal">CyptoCurrency</span>
                            </li>
                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-arrow-left-right-line"></i>

                                <span class="ml-2 font-normal">Exchange</span>
                            </li>


                            <li>
                                <hr class="my-1 border-gray-700" />
                            </li>


                            <li tabindex="0"
                                class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                <i class="ri-loop-left-line"></i>
                                <span class="ml-2">Page Updates</span>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            {{--  ? Mobile Menu  --}}
            <div class="flex items-center px-4 md:hidden">
                <button class="focus:outline-none" onclick="sidebarHandler(true)">
                    <i class="ri-menu-line text-2xl text-gray-100"></i>
                </button>

            </div>

            <div id="mobile-nav" class="absolute z-10 hidden h-full w-full -translate-x-full transform xl:hidden">
                <div id="menu" class="fixed z-50 hidden h-full w-full">

                </div>
            </div>









        </div>

        <div class="hidden flex-1 justify-end gap-2 px-2 py-2 md:flex">
            <div class="relative h-full" data-menu>
                <button
                    class="flex w-40 cursor-pointer justify-between rounded border border-gray-700 bg-trinary focus:outline-none focus:ring-gray-500">
                    <p class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400">
                        Search
                    </p>
                    <div class="flex items-center rounded-r border-l border-gray-700 bg-trinary py-1">
                        <div class="mx-3 flex cursor-pointer items-center text-gray-400">

                            <i class="ri-menu-search-line text-xl text-gray-400"></i>

                        </div>
                    </div>
                </button>
            </div>
            <div class="relative h-full" data-menu>

                <div
                    class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="focus:bg-gray-700" width="30" height="30"
                        viewBox="0 0 24 24">
                        <rect x="0" y="0" width="30" height="24" fill="none" stroke="none" />
                        <path fill="currentColor"
                            d="M12 12.25a3.75 3.75 0 1 1 3.75-3.75A3.75 3.75 0 0 1 12 12.25m0-6a2.25 2.25 0 1 0 2.25 2.25A2.25 2.25 0 0 0 12 6.25m7 13a.76.76 0 0 1-.75-.75c0-1.95-1.06-3.25-6.25-3.25s-6.25 1.3-6.25 3.25a.75.75 0 0 1-1.5 0c0-4.75 5.43-4.75 7.75-4.75s7.75 0 7.75 4.75a.76.76 0 0 1-.75.75" />
                    </svg>
                </div>

                <ul
                    class="invisible absolute right-0 w-48 rounded bg-trinary py-1 opacity-0 shadow transition duration-300">
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-user-line"></i>

                        <span class="ml-2 font-normal">Login</span>
                    </li>
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-questionnaire-line"></i>

                        <span class="ml-2 font-normal">Help Center</span>
                    </li>
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-question-mark"></i>

                        <span class="ml-2 font-normal">Whats New</span>
                    </li>


                    <li>
                        <hr class="my-1 border-gray-700" />
                    </li>


                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-moon-line"></i>
                        <span class="ml-2">Dark Mode</span>
                    </li>
                    <li tabindex="0"
                        class="flex cursor-pointer items-center px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-400 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                        <i class="ri-global-line"></i>
                        <span class="ml-2">Lunguage</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>

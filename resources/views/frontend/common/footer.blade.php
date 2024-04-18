<div class="flex w-full flex-col gap-2 divide-y divide-gray-700 bg-dark px-4 md:px-2">

    <div class="mx-auto flex w-full max-w-8xl flex-col justify-between py-10 md:flex-row">
        <div class="flex w-full items-baseline justify-start py-10 md:w-1/2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="w-32">
            </a>
        </div>
        <div class="flex w-full items-center justify-evenly md:w-1/2">
            <ul class="flex w-full justify-around gap-10">
                <li class="flex flex-col gap-2">
                    <p href="#" class="text-base font-semibold text-gray-200">Products</p>
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">ChatGPT Plugin</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">ChatGPT Plugin</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">ChatGPT Plugin</a>
                        </li>
                    </ul>
                </li>
                <li class="flex flex-col gap-2">
                    <p href="#" class="text-base font-semibold text-gray-200">Company</p>
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                    </ul>
                </li>
                <li class="flex flex-col gap-2">
                    <p href="#" class="text-base font-semibold text-gray-200">Support</p>
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                    </ul>
                </li>
                <li class="flex flex-col gap-2">
                    <p href="#" class="text-base font-semibold text-gray-200">Socials</p>
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-gray-400 hover:text-primary-light">Home 1</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>
    <div class="mx-auto flex w-full max-w-8xl flex-col justify-between gap-3 py-3 md:flex-row">
        <div class="flex w-full items-center justify-start md:w-1/3">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
        <div class="flex w-full items-center justify-center gap-2 md:w-2/3 md:justify-end">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/app-store.svg') }}" alt="logo" class="w-32">
            </a>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/play-store.svg') }}" alt="logo" class="w-32">
            </a>
        </div>

    </div>



</div>

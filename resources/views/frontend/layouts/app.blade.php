<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.common.head')
</head>

<body>
    <div class="bg-dark-black min-h-screen">
        @include('frontend.common.navigation')
        <div class=" w-full max-w-8xl mx-auto min-h-screen">
            @yield('content')
        </div>
        @include('frontend.common.footer')
        @include('frontend.common.script')

        @stack('scripts')
    </div>


</body>

</html>

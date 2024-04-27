<div class="grid-col-1 grid h-full w-full gap-3 md:grid-cols-3 md:gap-3 md:px-3">
    @foreach ($coins as $coin)
        <div class="group flex w-full cursor-pointer justify-between gap-5 rounded-md border border-gray-700 p-3 hover:bg-gray-700 md:border-gray-800">
            <div class="flex justify-start gap-1">
                <div class="flex">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/coins/'.$coin->image) }}" alt="">
                </div>
                <div class="ml-1 flex flex-col justify-center">
                    <p class="text-sm font-bold">{{ $coin->name }}</p>
                    <div class="flex">
                        <p class="rounded-2xl bg-gray-700 px-2 py-1 text-xs group-hover:bg-blue-500">{{ $coin->short_name }}</p>
                    </div>
                </div>
            </div>
            <div class="ml-5 flex flex-col justify-center">
                <p class="text-sm font-bold">${{ $coin->price }}</p>
                <p class="text-xs">{{ $coin->change }}</p>
            </div>
        </div>
    @endforeach
</div>

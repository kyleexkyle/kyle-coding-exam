<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">

            <input class="rounded w-full" placeholder="Search ... " type="search">

            <div class="grid grid-cols-6 gap-4 w-full">
                <div class="col-span-4 space-y-5">
                    <div class="w-full h-96 bg-gray-200 rounded-md ">

                    </div>

                    <div class="space-y-4">
                        <h1 class="font-bold">Video Title</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet animi corporis debitis deserunt dolorum esse expedita, incidunt magnam, minima natus nostrum obcaecati pariatur quia quisquam recusandae repellat temporibus voluptas!</p>
                    </div>
                </div>  <!-- ... -->
                <div class="space-y-4">
                    @foreach(range(1,5) as $range)
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <div class="h-32 w-52 bg-gray-200">

                                </div>
                            </div>

                            <div>
                                title
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

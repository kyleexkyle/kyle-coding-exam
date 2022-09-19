<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">


            <form method="get" action="{{ route('video.index') }}">

                <input name="search" class="rounded w-full" placeholder="Search ... " type="search">
                <button class="bg-red-300 p-3" type="submit">Search</button>
            </form>

            <div class="grid grid-cols-6 gap-4 w-full">
                <div class="col-span-4 space-y-5">

                    {!! $searchedVideo->player->embedHtml !!}

                    <div class="space-y-4">
                        <h1 class="font-bold"> {{ $searchedVideo->snippet->title }}</h1>
                        <p>{{ $searchedVideo->snippet->description }}</p>
                    </div>
                </div>  <!-- ... -->
                <div class="space-y-4">
                    @foreach($relatedVideos as $videos)
                        <form method="get" action="{{ route('video.index') }}">

                            <input type="hidden" name="video" value="{{ $videos->id->videoId }}">
                           <button type="submit">
                               <div class="grid grid-cols-2 gap-4">
                                   <div>
                                       <img width="{{ $videos->snippet->thumbnails->standard->width }}"
                                            height="{{ $videos->snippet->thumbnails->standard->height }}"
                                            src="{{ $videos->snippet->thumbnails->standard->url }}" alt="">
                                   </div>

                                   <div>
                                       {{ $videos->snippet->title }}
                                   </div>
                               </div>
                           </button>
                        </form>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

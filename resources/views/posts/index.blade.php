<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" id="post_header">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-3 mt-10 max-w-7xl">
        <div class="grid gap-x-3 gap-y-4 grid-cols-3">
            @foreach ($posts as $model)
                <!-- Card -->
                <card class="bg-white p-8 w-[24rem]"> 
                    <!-- Header -->
                    <header class="flex font-light text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2"  viewBox="0 0 24 24" stroke="#b91c1c">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                        <p id="blog_header">BLOG</p>
                    </header>

                    <!-- Title -->
                    <h2 class="font-bold text-3xl mt-2">
                        {{ $model->title }}
                    </h2>

                    <!-- Description -->
                    <p class="font-light">
                        {{ substr($model->body, 0, 150) }} ...
                    </p>

                    <!-- Button -->
                    <a href="{{ route('posts.show', $model->id) }}" class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
                        <p> READ MORE </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </card> 
            @endforeach
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
        <br>
        <br>
    </div>
</x-app-layout>

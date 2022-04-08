<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-10">
        <div class="grid gap-x-8 gap-y-4 grid-cols-3">
            @foreach ($posts as $model)
                <!-- Card -->
                <card class="bg-white p-8 w-[32rem]"> 
                    <!-- Header -->
                    <header class="flex font-light text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90 -ml-2"  viewBox="0 0 24 24" stroke="#b91c1c">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                    <p>TECH BLOG</p>
                    </header>

                    <!-- Title -->
                    <h2 class="font-bold text-3xl mt-2">
                    Rapid Event Notification System at Netflix
                    </h2>

                    <!-- Description -->
                    <h3 class="font-bold text-xl mt-8"> Intro </h3>
                    <p class="font-light"> Netflix has more than 220 million active members who perform a variety of actions throughout each session, ranging from renaming a profile to watchi... </p>

                    <!-- Button -->
                    <button class="bg-red-600 text-white font-semibold py-2 px-5 text-sm mt-6 inline-flex items-center group">
                    <p> READ MORE </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    </button>
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

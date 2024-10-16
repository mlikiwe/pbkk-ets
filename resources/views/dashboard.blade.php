<x-layout>
    <div class="px-16 pb-6">
        <hr class=" bg-pink-400" style="height: 0.5px; border: none;">
    </div>

    <h1 class="text-xl pl-20 px-12 md:px-14 md:pl-20">Welcome Back,</h1>
    <h1 class="text-4xl pl-20 px-12 md:px-14 md:pl-20">Gaysang Mintics</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 py-8 pl-20 px-12 md:py-8 md:px-14 md:pl-20 gap-6">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-white transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
            <p class="text-2xl">{{ $total_members }}</p>
            <p>Total Members</p>
            </div>
      </div>

        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between   p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-white transform transition-transform duration-500 ease-in-out"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>
                </svg>
            </div>
            <div class="text-right">
            <p class="text-2xl">{{ $total_books }}</p>
            <p>Total Books</p>
            </div>
        </div>

      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="py-2 px-6 rounded-md">
            <h2 class="text-2xl font-semibold text-white">Newest Member</h2>
        </div>
        <ul>
            @foreach ( $newest_members as $newestmember)
                <li class="flex items-center py-2 px-6">
                    <span class="text-white text-lg font-medium mr-4">{{ $loop->index+1 }}.</span>
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-white">{{ $newestmember->name }}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="py-2 px-6 rounded-md">
            <h2 class="text-2xl font-semibold text-white">Newest Book</h2>
        </div>
        <ul>
            @foreach ( $newest_books as $newestbook)
                <li class="flex items-center py-2 px-6">
                    <span class="text-white text-lg font-medium mr-4">{{ $loop->index+1 }}.</span>
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-white">{{ $newestbook->title }}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</x-layout>

<x-layout>
    <div class="px-16 pb-6">
        <hr class=" bg-pink-400" style="height: 0.5px; border: none;">
    </div>

    <h1 class="text-xl pl-20 px-12 md:px-14 md:pl-20">Welcome Back,</h1>
    <h1 class="text-4xl pl-20 px-12 md:px-14 md:pl-20">Gaysang Mintics</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 py-8 pl-20 px-12 md:py-8 md:px-14 md:pl-20 gap-6">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between   p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-white transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
            <p class="text-2xl">{{ $total_books }}</p>
            <p>Total Buku</p>
            </div>
      </div>

      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-white transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right">
            <p class="text-2xl">{{ $total_members }}</p>
            <p>Total Member</p>
            </div>
      </div>

      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="py-2 px-6 rounded-md">
            <h2 class="text-2xl font-semibold text-white">Member Terbaru</h2>
        </div>
        <ul>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">1.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">Emily Jones</h3>
                </div>
            </li>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">2.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">David Lee</h3>
                </div>
            </li>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">3.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">Sophia Williams</h3>
                </div>
            </li>
            <li class="flex items-center pb-4 px-6">
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white tracking-widest">.   .   .   .</h3>
                </div>
            </li>
        </ul>
    </div>

    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="py-2 px-6 rounded-md">
            <h2 class="text-2xl font-semibold text-white">Buku Terbaru</h2>
        </div>
        <ul>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">1.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">haha hihi</h3>
                </div>
            </li>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">2.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">huhu hehe</h3>
                </div>
            </li>
            <li class="flex items-center py-2 px-6">
                <span class="text-white text-lg font-medium mr-4">3.</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white">hehe hoho</h3>
                </div>
            </li>
            <li class="flex items-center pb-4 px-6">
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-white tracking-widest">.   .   .   .</h3>
                </div>
            </li>
        </ul>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</x-layout>

 <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
          <div id="sidebar" class="fixed rounded-xl flex flex-col top-4 left-4 h-[calc(100vh-2rem)] w-20 hover:w-64 md:w-64 bg-pink-700 text-white transition-all duration-200 border-none z-10">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
              <ul class="flex flex-col py-4">
                <div class="flex justify-center">
                    <svg class="w-[40px] h-[40px] md:w-[48px] md:h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/>
                      </svg>
                      <h1 class="px-1 py-2 text-white text-xl hidden md:block">My Library</h1>
                  </div>
                <li class="px-5 pt-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                    <h1 class="px-3 text-gray-300 text-base tracking-wide">General</h1>
                  </div>
                </li>
                <li class="pt-4 px-4 md:px-4">
                    <x-side-link href="/" :active="request()->is('/')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Dashboard</span>
                    </x-side-link>
                </li>
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                      <h1 class="px-3 text-gray-300 text-base tracking-wide">Modul</h1>
                    </div>
                  </li>
                  <li class="px-4 md:px-4">
                    <x-side-link href="/daftarmember" :active="request()->is('daftarmember')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Daftar Member</span>
                    </x-side-link>
                  </li>
                  <li class="px-4">
                    <x-side-link href="/daftarbuku" :active="request()->is('daftarbuku')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Daftar Buku</span>
                    </x-side-link>
                  </li>
                  <li class="px-4">
                    <x-side-link href="/peminjamanbuku" :active="request()->is('peminjamanbuku')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Peminjaman Buku</span>
                    </x-side-link>
                  </li>
              </ul>
            </div>
          </div>

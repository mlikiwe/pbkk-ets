 <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
          <div id="sidebar" class="fixed rounded-xl flex flex-col top-4 left-4 h-[calc(100vh-2rem)] w-20 hover:w-64 md:w-64 bg-pink-700 text-white transition-all duration-200 border-none z-10">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
              <ul class="flex flex-col py-4">
                <div class="flex flex-col items-center justify-center">
                    <svg class="w-[40px] h-[40px] text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 14h-2.722L11 20.278a5.511 5.511 0 0 1-.9.722H20a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM9 3H4a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V4a1 1 0 0 0-1-1ZM6.5 18.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM19.132 7.9 15.6 4.368a1 1 0 0 0-1.414 0L12 6.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    <h1 class="text-white text-xl mt-2 hidden md:block">Anomali Library</h1>
                </div>
                <li class="px-5 pt-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                    <h1 class="px-3 text-gray-300 text-base tracking-wide">General</h1>
                  </div>
                </li>
                <li class="pt-4 px-4 md:px-4">
                    <x-side-link href="/" :active="request()->is('/')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg width="30" height="30" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                              </svg>
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
                            <svg width="30" height="30" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                              </svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Member List</span>
                    </x-side-link>
                  </li>
                  <li class="px-4">
                    <x-side-link href="/daftarbuku" :active="request()->is('daftarbuku')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg width="30" height="30" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                              </svg>
                          </span>
                          <span class="ml-2 text-normal font-light truncate">Book List</span>
                    </x-side-link>
                  </li>
                  <li class="px-4">
                    <x-side-link href="/peminjamanbuku" :active="request()->is('peminjamanbuku')">
                        <span class="inline-flex justify-center items-center ml-0.5 md:ml-4">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                              </svg>

                          </span>
                          <span class="ml-2 text-normal font-light truncate">Book Loan</span>
                    </x-side-link>
                  </li>
              </ul>
            </div>
          </div>

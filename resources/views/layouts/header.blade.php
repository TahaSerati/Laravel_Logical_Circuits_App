   {{-- header --}}
   <header>
       <nav class="bg-white border-gray-200 dark:bg-gray-900">
           <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
               <a href="/" class="flex items-center">
                   <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                   <span
                       class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">logic-circuit</span>
               </a>
               <button data-collapse-toggle="navbar-default" type="button"
                   class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                   aria-controls="navbar-default" aria-expanded="false">
                   <span class="sr-only">Open main menu</span>
                   <svg class="w-6 h-6" onclick="toggleHeader()" aria-hidden="true" fill="currentColor"
                       viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd"
                           d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                           clip-rule="evenodd"></path>
                   </svg>
               </button>
               <div class="hidden w-full md:block md:w-auto" id="header">
                   <ul
                       class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                       @guest
                       @if (Route::has('login'))
                           <li class="nav-item">
                               <a class=" block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="{{ route('login') }}">{{ __('Login') }}</a>
                           </li>
                       @endif

                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class=" block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="Profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Profile
                           </a>

                        </li>
                        <li>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                   @endguest
                   <div class="h-1 w-8 md:w-1 md:h-8 bg-gray-700 mb-2"></div>
                       <li>
                           <a href="/changeBase"
                               class=" block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">changeBase</a>
                       </li>
                       <li>
                           <a href="makeBCD"
                               class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">makeBCD</a>
                       </li>
                       <li>
                           <a href="makeExccess-3"
                               class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">makeExccess-3</a>
                       </li>
                       <li>
                           <a href="makeDes"
                               class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">makeDes</a>
                       </li>
                       <li>
                           <a href="makeGray"
                               class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">makeGray</a>
                       </li>
                       <li>
                           <a href="karnaugh"
                               class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">karnaugh-map</a>
                       </li>
                       <li>
                        <a href="addition"
                            class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">addition & subtraction</a>
                    </li>


                   </ul>
               </div>
           </div>
       </nav>
   </header>

   <script>
       function toggleHeader() {
           var header = document.getElementById("header");
           if (header.style.display === "none") {
               header.style.display = "block";
           } else {
               header.style.display = "none";
           }
       }
   </script>
   {{-- header  end --}}

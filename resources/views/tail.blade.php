<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tail</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- 14 vidios start --}}
    {{-- all classes i learned :

    text-blue(color)-200(opacity) ;   
    font-bold
    text-6xl (size of text)
    text-center
    text-left
    text-right
    text-justify
    text-between
    underline
    text-through
    no-underline[for a tags]
    truncate (will add (...) if text was more than parents width )


    bg-blue-300;
    bg-fixed (like spotify :) )
    bg-local 
    bg-scroll 
    bg-violet-500 
    bg-fuchsia-600
    bg-indigo-800

    container;



    h-full;
    w-full;    
    w-32(numbers avalible insite)
    mx-auto
    my-auto
    mt-2(number)
    mb-2
    ms-2
    me-2



    flex[mother] _reqired_
    flex-row
    flex-col
    flex-1(number)[for child] _optional_
    items-center[mother][flex]
    justify-center[mother][flex]
    grid grid-cols-2(number)[mother]
    hidden => md:hidden


    relative[mother]
    absolute[child]


    border-2 (px-number)
    border-blue-200;
    border-collapse
    border-separate


    rounded-none    
    rounded-sm
    rounded 
    rounded-sm
    rounded-lg
    rounded_full
    rounded-t-lg
    rounded-r-sm (only right will have radius)

    shodow
    shodow-sm
    shodow-lg


    placeholder-gray-500 
    placeholder-opacity-10(0 to 100)




    md:(anyclass) 
    sm:(anyclass)
    other breakpoints


    object-cover -> for images normal style
    overflow-hidden
    outline-none



    ursor-default
    




    --}}

    {{-- 1 start container --}}
    {{-- <div class="container bg-blue-200 mx-auto w-full h-20 mt-2"></div> --}}

    {{-- ______________________________________ --}}
    {{-- 2 start Display , Position ,Inset --}}
    {{-- ______________________________________ --}}

    {{-- <div class="container bg-blue-200 mx-auto w-full h-32 mt-2"> --}}

    {{-- <div class="flex gap-3 h-32">
            <div class="flex-1 text-6xl bg-red-200">1</div>
            <div class="flex-1 text-6xl bg-red-200">2</div>
            <div class="flex-1 text-6xl bg-red-200">3</div>
        </div> --}}
    {{-- <div class="flex gap-3 h-full">
            <div class="flex-1 text-6xl bg-red-200">1</div>
            <div class="flex-1 text-6xl bg-red-200">2</div>
            <div class="flex-1 text-6xl bg-red-200">3</div>
        </div> --}}
    {{-- 
    <div class="flex gap-3 h-full p-2">
            <div class=" flex-1 w-full text-6xl bg-red-200">1</div>
            <div class="w-full md:hidden">
                <div class="text-6xl bg-red-200">2</div>
                <div class="text-6xl bg-red-500">3</div>
            </div>
        </div> --}}


    {{-- ______________________________________ --}}
    {{-- difrance bitween flex and inline-flex is that flex take all w of his mother and inline-flex take place how mutch his childs need  --}}
    {{-- ______________________________________ --}}

    {{-- <div class="inline-flex gap-3 h-full p-2">
            <div class="w-20 text-6xl bg-red-200">1</div>
            <div class="w-20 text-6xl bg-red-200">3</div>
            <div class="w-20 text-6xl bg-red-200">2</div>
        </div> --}}
    {{-- <div class="inline-flex gap-3 h-full p-2">
            <div class="w-20 text-6xl bg-red-200">1</div>
            <div class="w-20 text-6xl bg-red-200">3</div>
            <div class="w-20 text-6xl bg-red-200">2</div>
        </div> --}}




    {{-- ______________________________________ --}}
    {{-- grids is for making some coulmns and managing them  --}}
    {{-- display block take a width 100% itself i mean every child  take a row for himself --}}
    {{-- ______________________________________ --}}

    {{-- <div class="grid grid-cols-1 gap-2 md:gap-1 md:grid-cols-3 h-full p-2">
            <div class="w-full text-6xl bg-red-200">1</div>
            <div class="w-full text-6xl bg-red-200">2</div>
            <div class="w-full text-6xl bg-red-200">3</div>
        </div> --}}

    {{-- ______________________________________ --}}
    {{-- ______________________________________ --}}

    {{-- <div class="relative bg-red-500 w-full h-full ">
            <div class="absolute w-20 h-20 rounded-full bg-green-200 top-16 left-16"></div>
            <div class="absolute w-20 h-20 rounded-full bg-red-300 top-16 left-32"></div>
        </div> --}}

    {{-- </div> --}}

    {{-- ______________________________________ --}}
    {{-- 3 start flexbox --}}
    {{-- ______________________________________ --}}

    {{-- <div class="container mx-auto w-full h-32 mt-2">

        <div class="flex flex-row md:flex-row-reverse sm:flex-col gap-3 h-20 ">
            <div class="flex-1 text-6xl bg-red-200">1</div>
            <div class="flex-1 text-6xl bg-red-200">2</div>
            <div class="flex-1 text-6xl bg-red-200">3</div>
        </div>

    </div> --}}
    {{-- ______________________________________ --}}
    {{-- 4 start grid and flexbox  --}}
    {{-- ______________________________________ --}}


    {{-- ______________________________________ --}}
    {{-- 5 start spacizing , sizing , typography , bg --}}
    {{-- ______________________________________ --}}


    {{-- ______________________________________ --}}
    {{-- 6 start borders , efects , filter --}}
    {{-- ______________________________________ --}}

    {{-- ______________________________________ --}}
    {{-- 7 start alpine.js and alert --}}
    {{-- ______________________________________ --}}


    {{-- <div class="relative container mx-auto w-1/2 h-32 bg-red-200 mt-10 rounded-full border-4 border-red-500" x-show="show"  x-data="{ show:true }">
        <strong class="absolute top-12 left-16">stop using wrong password</strong>
        <p class="absolute top-12 left-72">im bla bla bla neghtbor</p>

        // svg from heroicon 
        <svg x-on:click="show = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
        class="w-6 h-6 absolute top-12 right-4 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          
    </div>

    // cdn of alpine.js :
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}


    {{-- ______________________________________ --}}
    {{-- 8 start  progressbar , button group, pagination --}}
    {{-- ______________________________________ --}}


    {{-- ______________________________________ --}}
    {{-- 9 start  carts --}}
    {{-- ______________________________________ --}}


    {{-- <div class="container mx-auto max-w-xl mt-16">
        <div class="grid grid-cols-2 bg-yellow-200 shodow-lg rounded-lg gap-4 w-full h-72">
            <div class="aspect-w-9 aspect-h-9 ">
                <img src="images/prf.jpg" alt="avtar" class="w-full rounded-full p-2">
            </div>
            <div class="relative">
                <p class="text-bold pt-2 text-center">taha serat makialy
                </p>
                <p class="text-justify p-4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolor.
                </p>
                <div class="bg-blue-500 w-32 text-center rounded-lg absolute right-24">
                    <a href="underline-none  text-white text-medium font-medium ">more info</a>
                </div>
            </div>

        </div> --}}

    {{-- ______________________________________ --}}
    {{-- 10 start index page example --}}
    {{-- ______________________________________ --}}
    {{-- 
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-6">
          <nav class="flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">فروشگاه آنلاین</a>
            <ul class="flex space-x-4">
              <li><a href="#" class="text-gray-600 hover:text-blue-600">صفحه اصلی</a></li>
              <li><a href="#" class="text-gray-600 hover:text-blue-600">محصولات</a></li>
              <li><a href="#" class="text-gray-600 hover:text-blue-600">درباره ما</a></li>
              <li><a href="#" class="text-gray-600 hover:text-blue-600">تماس با ما</a></li>
            </ul>
          </nav>
        </div>
      </header>
    
      <section class="py-12">
        <div class="container mx-auto px-4">
          <h1 class="text-4xl font-bold text-center mb-6">بهترین محصولات را انتخاب کنید</h1>
    
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
              <img src="product1.jpg" alt="محصول 1" class="w-full mb-4">
              <h2 class="text-xl font-bold">محصول 1</h2>
              <p class="text-gray-600">توضیحات محصول 1</p>
              <a href="#" class="block mt-4 text-blue-600 hover:underline">جزئیات بیشتر</a>
            </div>
    
            <div class="bg-white rounded-lg shadow-lg p-6">
              <img src="product2.jpg" alt="محصول 2" class="w-full mb-4">
              <h2 class="text-xl font-bold">محصول 2</h2>
              <p class="text-gray-600">توضیحات محصول 2</p>
              <a href="#" class="block mt-4 text-blue-600 hover:underline">جزئیات بیشتر</a>
            </div>
    
            <!-- Add more product cards here -->
    
          </div>
        </div>
      </section>
    
      <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto px-4">
          <p class="text-center">تمامی حقوق برای فروشگاه آنلاین محفوظ است.</p>
        </div>
      </footer> --}}




    {{-- <button class=" rounded-full p-4 bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ...">
      Save changes
    </button> --}}
    {{-- <form>
      <label class="block">
        <span class="block text-sm font-medium text-slate-700">Username</span>
        <!-- Using form state modifiers, the classes can be identical for every input -->
        <input type="text" value="tbone"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500
        "/>
      </label>
      <!-- ... -->
    </form> --}}

    {{-- <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
      <div class="flex items-center space-x-3">
        <svg class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
        <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">New project</h3>
      </div>
      <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting templates.</p>
    </a> --}}

    {{-- <div class="p-8">
       <h5 class="h5me">say hello to world</h5>
        <a href="" class="rounded-full bg-gray-700 underline-none p-4 ms-4 change" id="change">change</a>
    </div>


    <script>
        let atag = document.querySelector('a');

        atag.addEventListener('click' , myfunctag);
        // let atag = document.queryselector('.change').addEventListener('dblclick' , myfunctag);
        // let atag = document.queryselector('.change').addEventListener('mousemove' , myfunctag);
        // let atag = document.queryselector('.change').addEventListener('mouseup' , myfunctag);
        // let atag = document.queryselector('.change').addEventListener('mousedown' , myfunctag);

        // let h5me = document.queryselector('.h5me').addEventListener('click' , myfunch5);

        myfunctag(e){
          // console.log(e.type);
          console.log('hello');
          e.preventdefault;
        }
        
    </script> --}}

    {{-- header --}}
    {{-- <header>
        <nav class="bg-gray-600 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-col flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">logic-circuit</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md: hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-col md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class=" block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                    class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                    href="Profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    Profile
                                </a>

                            </li>
                            <li>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="block py-2 pl-3 pr-4 text-gray-900 hover:bg-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        href="{{ route('logout') }}"
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


                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}

    {{-- <script>
        function toggleHeader() {
            var header = document.getElementById("header");
            if (header.style.display === "none") {
                header.style.display = "block";
            } else {
                header.style.display = "none";
            }
        }
    </script> --}}
    {{-- header  end --}}
    {{-- <div class="flex flex-row h-full">

        <nav class="hidden bg-gray-700 h-full w-32 rounded-l-lg" id="hideit">
            <div class="p-8 flex flex-col rounded-l-lg">
                <div class=""><a href="" class="text-xl text-white p-4 hover:text-blue-700"> first </a>
                </div>
                <div class=""><a href="" class="text-xl text-white p-4 hover:text-blue-700 "> secend </a>
                </div>

            </div>
        </nav>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md: hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" onclick="toggleHeader()" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <script>
        function toggleHeader() {
            var header = document.getElementById("hideit");
            if (hideit.style.display === "none") {
                hideit.style.display = "block";
            } else {
                hideit.style.display = "none";
            }
        }
    </script> --}}



    {{-- ______________________________________ --}}
    {{-- 11 start index page example --}}
    {{-- ______________________________________ --}}


    <img src="images/prf.jpg" alt="">



</body>

</html>

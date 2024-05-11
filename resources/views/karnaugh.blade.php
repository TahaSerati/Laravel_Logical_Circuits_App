<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> --}}

    @vite('resources/css/app.css')

    <title>digital|karnaugh</title>
</head>







<body>
    @include('layouts.header')

    <nav class="bg-white border-gray-200 dark:bg-gray-900" style="direction: rtl">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            {{-- <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DIGITAL-CONVERTOR</span>
            </a> --}}
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                {{-- <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg> --}}
            </button>
            <div class=" w-full md:block md:w-auto mt-4" id="navbar-default">
                <ul
                    class="font-medium flex flex-col  p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 gap-4">

                    <li>
                        <a href="/karnaugh-two"
                            class="block py-2 pl-3 pr-4 hover:bg-blue-300 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">2_variables</a>
                    </li>
                    <li>
                        <a href="/karnaugh-three"
                            class="block py-2 pl-3 pr-4 hover:bg-blue-300 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">3_variables</a>
                    </li>
                    <li>
                        <a href="karnaugh-four"
                            class="block py-2 pl-3 pr-4 hover:bg-blue-300 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">4_variables</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>


    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8 border-2 border-black-200">
            <h1 class="text-2xl font-bold mb-4 text-center">how to make a karnaugh map </h1>

            <div class="text-justify pt-4">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quam dolore? Porro inventore
                    similique culpa
                    totam officiis excepturi nemo nobis cupiditate officia?
                <p class="font-bold"> Exercitationem mollitia provident, tenetur voluptate
                    repudiandae nesciunt labore vero, numquam corporis perferendis optio cumque rem repellat esse, nisi
                    nihil!
                    Rem ullam iure, sit minima cum in unde alias error delectus ipsum</p> repudiandae corporis maxime
                voluptates
                assumenda, pariatur accusantium cupiditate perferendis deleniti voluptatem nihil beatae ipsam natus
                eveniet
                ratione. Neque laborum aliquid, tenetur illo saepe eos maiores molestiae vel dolorem voluptas ex sint
                iste
                minima velit deleniti. Maxime quae reiciendis incidunt et commodi quam nostrum natus expedita adipisci
                ullam!</p>
            </div>
            {{-- @if (isset($number) && isset($arr))
                <p class="mb-4">Decimal: {{ $number }}</p>
                <p class="mb-4">BCD: @foreach ($arr as $item)
                        {{ $item }}
                    @endforeach
                </p>
            @endif

            <form action="/makeBCD" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="number" class="block mb-2">Enter a Decimal Number:</label>
                    <input type="text" name="number" id="number" class="border p-2 rounded w-full" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form> --}}
        </div>
    </div>


</body>

</html>

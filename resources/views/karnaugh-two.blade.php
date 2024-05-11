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
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 gap-4">

                    <li>
                        <a href="/karnaugh-two"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">2_variables</a>
                    </li>
                    <li>
                        <a href="/karnaugh-three"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">3_variables</a>
                    </li>
                    <li>
                        <a href="karnaugh-four"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">4_variables</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>


    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8">
            <h1 class="text-2xl font-bold mb-4 text-center">2_variables karnaugh</h1>

            @if (isset($ziro_ziro))
                <table class="table-auto border-2 hover:table-fixed border-collapse border border-slate-400 ml-32">
                    <thead>
                        <tr>
                            <th class="border p-2 border-slate-300 text-center text-bold ...">A\B</th>
                            <th class="border p-2 border-slate-300 text-center text-bold ...">~B</th>
                            <th class="border p-2 border-slate-300 text-center text-bold ...">B</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="border p-2 border-slate-300 text-center text-bold ...">~A</th>
                            <td class="border border-slate-300 text-center ...">{{$ziro_ziro}}</td>
                            <td class="border border-slate-300 text-center ...">{{$ziro_one}}</td>
                        </tr>
                        <tr>
                            <th class="border p-2 border-slate-300 text-center text-bold ...">A</th>
                            <td class="border border-slate-300 text-center ...">{{$one_ziro}}</td>
                            <td class="border border-slate-300 text-center ...">{{$one_one}}</td>
                        </tr>
                  
                    </tbody>
                </table>
                function = {{$function}}
            @else
                <div class="mb-4">
                    <label for="number" class="block mb-2">make the truth table:</label>
                    <div class="max-w-md mx-auto mt-8">
                        <div class="bg-white shadow p-8">
                            <form action="karnaugh-two" method="POST">
                                @csrf


                                <table
                                    class="table-auto border-2 hover:table-fixed border-collapse border border-slate-400 ml-33">
                                    <thead>
                                        <tr>
                                            <th class="border p-4 border-slate-300 text-center ...">B</th>
                                            <th class="border p-4 border-slate-300 text-center ...">A</th>
                                            <th class="border p-4 border-slate-300 text-center ...">F1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-300 text-center ...">0</td>
                                            <td class="border border-slate-300 text-center ...">0</td>
                                            <td class="border border-slate-300 text-center ...">1 <input type="radio"
                                                    name="first" value="1"> <br> 0 <input type="radio" name="first" value="0"  checked>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300 text-center ...">0</td>
                                            <td class="border border-slate-300 text-center ...">1</td>
                                            <td class="border border-slate-300 text-center ...">1 <input type="radio"
                                                    name="secend" value="1"> <br> 0 <input type="radio" name="secend" value="0" checked>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300 text-center ...">1</td>
                                            <td class="border border-slate-300 text-center ...">0</td>
                                            <td class="border border-slate-300 text-center ...">1 <input type="radio"
                                                    name="third" value="1"> <br> 0 <input type="radio" name="third" value="0" checked>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300 text-center ...">1</td>
                                            <td class="border border-slate-300 text-center ...">1</td>
                                            <td class="border border-slate-300 text-center ...">1 <input type="radio"
                                                    name="forth" value="1"> <br> 0 <input type="radio" name="forth" value="0" checked>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <button type="submit"
                                    class="rounded-full w-44 ml-16 bg-blue-600 text-white">submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            @endif


        </div>
    </div>


</body>

</html>

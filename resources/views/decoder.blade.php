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

    <title>digital|changeBase</title>
</head>

<body>
    @include('layouts.header')



    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8">
            <h1 class="text-2xl font-bold mb-4" id="h12">base Converter</h1>
            {{-- @if (isset($error))
                {{ $error }}
            @endif --}}




            <form action="/decoder" method="POST">
                @csrf
                <div class="mb-4">
                    <div class="text-red-500">
                        @if ($errors->has('number'))
                            {{ $errors->first('number') }}
                        @endif

                    </div>
                    <label for="count" class="block mb-2">Enter the count of variables:</label>
                    <input type="text" name="count" id="count" class="border p-2 rounded w-full" required>

                    <label for="count" class="block mb-2">Enter the minterms :</label>
                    <input type="text" name="m1" id="m1" class="border p-2 mt-2 rounded w-full" required>
                    <input type="text" name="m2" id="m2" class="border p-2 mt-2 rounded w-full" required>


                    {{-- <label for="count" class=" mb-2 ">active-high </label>
                    <input type="radio" name="active" id="active-high" class="border p-2  mx-auto" required>

                    <label for="count" class=" mb-2">active-low</label>
                    <input type="radio" name="active" id="active-low" class="border p-2  mx-auto"> --}}


                    <label for="count" class=" p-2 mt-2">choose</label>
                    {{-- <input type="select" name="m1" id="m1" class="border p-2 mt-2 rounded w-full" required> --}}
                    <select name="active" class="p-2">
                        <option value="active-high" selected>active-high (1)</option>
                        <option value="active-low">active-high (0)</option>

                    </select>



                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form>


        </div>

        {{-- @if (isset($output)) --}}
        @php
            $count = 7;
            $output = 6;
        @endphp
        <div class=" bg-white shadow p-8 mt-8">
            <div class="relative bg-gray-200 mx-auto my-auto w-1/2 h-64">

                @for ($i = 1; $i <= $count; $i++)
                    {{-- <div class="absolute md:left-0 md:top-{{ $i * 8 }}">Xklkml</div> --}}
                    <div class="absolute md:top-1 md:left-0 ">P1</div>
                    <div class="absolute md:top-8 md:left-0 ">P2</div>
                    <div class="absolute md:top-16 md:left-0 ">P3</div>
                @endfor
                @for ($j = 1; $j <= $output; $j++)
                    <div class="absolute md:top-1 md:right-0 ">D1</div>
                    <div class="absolute md:top-8 md:right-0 ">D2</div>
                    <div class="absolute md:top-16 md:right-0 ">D3</div>
                @endfor

            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At illum, iste debitis aliquam saepe nobis
            temporibus veniam distinctio, pariatur est vel esse, porro fuga doloremque ullam provident nulla impedit
            perferendis aperiam. Exercitationem dicta rem quia explicabo ipsum, autem praesentium libero voluptatem
            ducimus delectus cupiditate illum, in quasi perferendis deleniti. Dolorum natus eum itaque ipsa, sint qui
            neque amet aliquam cum consectetur iure exercitationem, placeat consequuntur odit sunt. Dolorem, laborum
            consequuntur facilis sequi tempora id autem et. Vero commodi rem hic impedit ipsa atque praesentium at
            pariatur, soluta voluptates quidem voluptatem odit dolores nulla recusandae porro quo est itaque mollitia?
            Quisquam!</p>
        {{-- @endif --}}
    </div>




    <script>
        let count = document.getElementbyId('count');
        count.classname = ''
        if (count.textcontent != null) {
            let j = document.getElementbyId('h12');
            j.textcontent = "not noll";
        }
    </script>

</body>

</html>

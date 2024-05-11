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

    <title>digital|makeBCD</title>
</head>

<body>
    @include('layouts.header')
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8">
            <h1 class="text-2xl font-bold mb-4">Decimal to BCD Converter</h1>

            @if (isset($number) && isset($arr))
                <p class="mb-4">Decimal: <br> {{ $number }}</p>
                <p class="mb-4">BCD: <br> @foreach ($arr as $item)
                        {{ $item }}
                    @endforeach
                </p>
            @endif

            <form action="/makeBCD" method="POST">
                @csrf
                <div class="mb-4">
                    <div class="text-red-500">
                        @if ($errors->has('number'))
                            {{$errors->first('number')}}
                        @endif

                    </div>
                    <label for="number" class="block mb-2">Enter a Decimal Number:</label>
                    <input type="text" name="number" id="number" class="border p-2 rounded w-full" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form>
        </div>
    </div>


</body>

</html>

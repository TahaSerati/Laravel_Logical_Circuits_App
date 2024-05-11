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

    <title>digital|makeDes</title>
</head>

<body>
    @include('layouts.header')
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8">
            <h1 class="text-2xl font-bold mb-4">Gray to Decimal Converter</h1>

            @if (isset($error))
                <p class="mb-4">ERROR : {{ $error }}</p>
            @endif

            @if (isset($num) && isset($arr))
                <p class="mb-4">Gray: {{ $num }}</p>
                <p class="mb-4">binary: @foreach ($arr as $item)
                        {{ $item }}
                    @endforeach
                </p>
                <p class="mb-4">Decimal: {{ $decimal }}</p>

            @endif

            <form action="/makeDes" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="number" class="block mb-2">Enter a Gray Number:</label>
                    <div class="flex">
                        <input type="text" name="number" id="number" class="border p-2 rounded w-full mr-2"
                            required>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form>

        </div>
    </div>


</body>

</html>

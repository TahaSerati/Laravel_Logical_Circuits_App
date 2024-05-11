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

    <title>digital|makeExccess-3</title>
</head>

<body>
    @include('layouts.header')
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white shadow p-8">
            <h1 class="text-2xl font-bold mb-4">Decimal to makeExccess-3</h1>

            @if (isset($decimal) && isset($arr))
                <p class="mb-4">Decimal: {{ $decimal }}</p>
                <p class="mb-4">Express-3: @foreach ($arr as $item)
                    {{$item}}
                @endforeach</p>
            @endif

            <form action="/makeExccess-3" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="decimal" class="block mb-2">Enter a Decimal Number:</label>
                    <input type="text" name="decimal" id="decimal" class="border p-2 rounded w-full" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form>
        </div>
    </div>


</body>

</html>

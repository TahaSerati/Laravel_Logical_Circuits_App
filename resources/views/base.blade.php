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
            <h1 class="text-2xl font-bold mb-4">base Converter</h1>
            @if (isset($error))
                {{ $error }}
            @endif


            @if (isset($man) && $man != 0)
                <p class="mb-4">your number in base {{ $to }}: {{ $man }}</p>
            @elseif(isset($arrfinal))
                <p class="mb-4">your number in base {{ $to }}: @foreach ($arrfinal as $item)
                        {{$item}}
                    @endforeach
                </p>

            @endif

            <form action="/changeBase" method="POST">
                @csrf
                <div class="mb-4">
                    <div class="text-red-500">
                        @if ($errors->has('number'))
                            {{$errors->first('number')}}
                        @endif

                    </div>
                    <label for="number" class="block mb-2">Enter a Decimal Number:</label>
                    <input type="text" name="number" id="number" class="border p-2 rounded w-full" required>
                    <label for="number" class="block mb-2">select numbers base</label>
                    <select name="from" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10" selected>10</option>
                        {{-- <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option> --}}

                    </select>
                </div>
                <div class="mb-4">
                    <label for="decimal" class="block mb-2">choose wanted base</label>
                    <select name="to" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10" selected>10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>

                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Convert</button>
            </form>
        </div>
    </div>


</body>

</html>

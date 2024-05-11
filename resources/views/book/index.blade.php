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
    {{-- @include('layouts.header') --}}

    <div class="fixed z-50 inset-y-0 left-0 w-64 bg-white shadow-lg">
        <!-- Sidebar content goes here -->
      </div>
      
      <svg class="h-6 w-6 text-gray-500 cursor-pointer lg:hidden" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      
      <script>
      const toggleButton = document.querySelector('.lg\\:hidden');
      const sidebar = document.querySelector('.sidebar');
      
      toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
      });
      </script>
    
    
    
    







</body>

</html>

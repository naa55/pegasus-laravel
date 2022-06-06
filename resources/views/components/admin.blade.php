<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Manage Landing Page</title>

</head>
<body class="">
    <!-- Navabr -->
    <nav class="relative mx-auto container">
        <div class="flex justify-between items-center m-8">
            <div>
                Admin
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="" class="">Home</a>
                <a href="/team" class="">Teams</a>
                <a href="" class="">Contact</a>
                <a href="/register" class="">Register</a>
                @auth
                   <a href="/logout" class="">logout</a>
                   @else
                   <a href="/login" class="">login</a>
                @endauth


            </div>
             <!-- Hanbuher Icon -->
             <button
             id="menu-btn"
             class=" block hamburger md:hidden focus:outline-none"
           >
             <span class="hamburger-top"></span>
             <span class="hamburger-middle"></span>
             <span class="hamburger-bottom"></span>
           </button>
        </div>
         <!-- Mobile Menu -->
         <div class="md:hidden">
          <div
            id="menu"
            class="absolute flex-col items-center hidden self-end py-8 space-y-4 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
          >
            <a href="#">Pricing</a>
            <a href="#">Product</a>
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">Community</a>
          </div>
        </div>
    </nav>
    <div class="relative mx-auto container mt-32">
    {{$slot}}

    </div>
        <script src="/js/script.js"></script>
        <script src="main.js"></script>
</body>
</html>

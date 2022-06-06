<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Manage Landing Page</title>

</head>
<body class="bg-backColor">
    <!-- Navabr -->
    <nav class="relative mx-auto container">
        <div class="flex justify-between items-center">
            <div class="">
                <a href=""><img src="/img/ph-logo.png" class="" style="height: 170px; width:170px" alt=""></a>
            </div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="" class="hover:text-secondColor">Home</a>
                <a href="" class="hover:text-secondColor">Product</a>
                <a href="/teams" class="hover:text-secondColor">Teams</a>
                <a href="" class="hover:text-secondColor">Pricing</a>
                <a href="" class="hover:text-secondColor">Contact</a>
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
            {{$slot}}

            <footer class="bg-veryDarkBlue">
                <!-- Flex Container -->
                <div
                  class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
                >
                  <!-- Logo and social links container -->
                  <div
                    class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
                  >
                    <div class="mx-auto my-6 text-center text-white md:hidden">
                      Copyright &copy; 2022, All Rights Reserved
                    </div>
                    <!-- Logo -->
                    <div>
                      <a href=""><img src="img/ph-logo.png" class="" style="height: 170px; width:170px" alt=""></a>
                    </div>
                    <!-- Social Links Container -->
                    <div class="flex justify-center space-x-4">
                      <!-- Link 1 -->
                      <a href="#">
                        <img src="img/icon-facebook.svg" alt="" class="h-8" />
                      </a>
                      <!-- Link 2 -->
                      <a href="#">
                        <img src="img/icon-youtube.svg" alt="" class="h-8" />
                      </a>
                      <!-- Link 3 -->
                      <a href="#">
                        <img src="img/icon-twitter.svg" alt="" class="h-8" />
                      </a>
                      <!-- Link 4 -->
                      <a href="#">
                        <img src="img/icon-pinterest.svg" alt="" class="h-8" />
                      </a>
                      <!-- Link 5 -->
                      <a href="#" class="">
                        <img src="img/icon-instagram.svg" alt="" class="h-8" />
                      </a>
                    </div>
                  </div>
                  <!-- List Container -->
                  <div class="flex justify-around space-x-32">
                    <div class="flex flex-col space-y-3 text-white">
                      <a href="#" class="hover:text-secondColor">Home</a>
                      <a href="#" class="hover:text-secondColor">Pricing</a>
                      <a href="#" class="hover:text-secondColor">Products</a>
                      <a href="#" class="hover:text-secondColor">About</a>
                    </div>
                    <div class="flex flex-col space-y-3 text-white">
                      <a href="#" class="hover:text-secondColor">Careers</a>
                      <a href="#" class="hover:text-secondColor">Community</a>
                      <a href="#" class="hover:text-secondColor">Privacy Policy</a>
                    </div>
                  </div>

                  <!-- Input Container -->
                  <div class="flex flex-col justify-between">
                    <form>
                      <div class="flex space-x-3">
                        <input
                          type="text"
                          class="flex-1 px-4 rounded-full focus:outline-none"
                          placeholder="Updated in your inbox"
                        />
                        <button
                          class="px-6 py-2 text-white rounded-full bg-secondColor hover:bg-secondColorLight focus:outline-none"
                        >
                          Go
                        </button>
                      </div>
                    </form>
                    <div class="hidden text-white md:block">
                      Copyright &copy; 2022, All Rights Reserved
                    </div>
                  </div>
                </div>
            </footer>
        <script src="/js/script.js"></script>
        <script src="main.js"></script>
</body>
</html>

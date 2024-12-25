<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Нүүр</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Бидний тухай</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Блог</a>
                        </li>
                        <li class="nav-item">

                           <a class="nav-link " href="{{route('home')}}">Нэвтрэх</a>
                           @if (Route::has('login'))

                           @auth
                           <a class="nav-link " href="{{route('home')}}">Нүүр</a>
                           @else
                           <a class="nav-link " href="{{route('login')}}">Нэвтрэх</a>
                           <a class="nav-link " href="{{route('register')}}">Бүртгүүлэх</a>
                           @endauth
                           @endif
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="#home">Нүүр</a></li>
                     <li><a href="#about">Бидний тухай</a></li>
                     <li><a href="#service">Үйл ажиллагаа</a></li>
                     <li><a href="#blog">Blog</a></li>
                     @if (Route::has('login'))
                        @auth
                           <x-app-layout>
                            </x-app-layout>
                        @else
                           <li><a href="{{ route('login') }}">Нэвтрэх</a></li>
                        @endauth
                     @endif

                     <!-- <li><a href="{{route('register')}}">Register</a></li> -->
                  </ul>
               </div>
            </div>
         </div>
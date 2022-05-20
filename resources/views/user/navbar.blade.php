<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top"  style="background-color:#5f4dee;">
        <div class="container-fluid d-sm-flex justify-content-between"  >

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href=" {{url('/')}}"><img src="images/logo.svg" alt="AASTU"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll  {{ Request::is('/') ? 'active' : null }}" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ Request::is('news') ? 'active' : null }}" href="{{url('news')}}">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ Request::is('items') ? 'active' : null }}" href="{{url('items')}}">ITEMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ Request::is('booking') ? 'active' : null }}" href="{{url('booking')}}">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ Request::is('contact') ? 'active' : null }}" href="{{url('contact')}}">CONTACT</a>
                    </li>

                </ul>
                @if(Route::has('login'))
                  @auth
                   <span class="nav-item">
                      <x-app-layout>
                      </x-app-layout>
                   </span>
                 @else
                  <span class="nav-item">
                    <a class="btn-outline-sm" href=" {{route('login')}}">LOG IN</a>
                  </span>
                  <span class="nav-item">
                    <a class="btn-outline-sm" href=" {{route('register')}}">REGISTER</a>
                  </span>
                @endauth
            @endif
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->

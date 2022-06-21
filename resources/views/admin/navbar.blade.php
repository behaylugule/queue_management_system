<nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: blue-black">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{url('home')}}"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
            <div class="dropdown  ">
  <div href="{{url('booking_list')}}" class="nav-item position-relative" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> 
              <span class="iconify" data-icon="mdi:bell-ring" style="color: white;" data-width="30">
              </span>
              <span class="position-absolute top-0 start-100 p-1 translate-middle badge rounded-pill bg-danger">
              {{$notification->Count()}}
              </span> 
            </div> 
     <ul  class="dropdown-menu p-1 position-absolute left-0 mr-5 my scrollnotif" style="width:350px;" aria-labelledby="dropdownMenuButton1">
      <a class="btn btn-success mb-3 p-2 " href="{{url('booking_list')}}">Book List</a>
      @foreach($notification as $not)
      <li  class="alert alert-success"> 
       {{$not->data['name']}} has booked at time interval {{$not->data['time']}}
      </li>
      @endforeach
     </ul>
     </div>
            
              <li class="nav-item ">
                <x-app-layout>
                </x-app-layout>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
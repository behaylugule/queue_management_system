<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
      label{
        display:inline-block;
        width:250px
      }
    </style>
    @include('admin.css') 
   
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
     <div class="container-fluid page-body-wrapper" style="background-color:white" >
     
     <div class="container" align="center" style="padding-top: 10px;">
      <h4 class="text-black p-4 fw-bold fs-5 text-start " >Booking list</h4>
     <div class="table-responsive bg-black" style="max-height:500px">
    
     <table class="table caption-top" style="color: white;" >
     @if(session()->has('message'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}                    
         <button type="button" class="btn-close fs-4" text-align=center data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>


       @endif
     {{-- <caption class="bg-black text-white" style="padding:10px; font-weight: bold">List of users</caption> --}}
  <thead>
    <tr  class="bg-black text-white">
      <th scope="col" style=" font-size:20px;">Name</th>
      <th scope="col" style=" font-size:20px;">time</th>
      <th scope="col"  style=" font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody class="bg-light text-black">
      @foreach($books as $book)
    <tr >
      <td style="font-size:17px;font-wight:400;">{{$book->user->name}}</td>
      <td style="font-size:17px;font-wight:400;">{{$book->time->from}}am - {{$book->time->to}}am</td>
      <td>
      <a class="btn btn-success text-black" 
            href="{{url('booking_detail',$book->id)}}">Detail</a>
           </td>
    </tr>
    @endforeach
   </tbody>
  </table>
 </div>
 
</div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
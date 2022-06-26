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
     <div class="table-responsive bg-black" >
    
     <table class="table caption-top" style="color: white;" >
     @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
     {{-- <caption class="bg-black text-white" style="padding:10px; font-weight: bold">List of users</caption> --}}
  <thead>
    <tr  class="bg-black text-white">
      <th scope="col" style=" font-size:20px;">Name</th>
      <th scope="col"  style=" font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody class="text-black">
      @foreach($books as $book)
    <tr>
      <td >{{$book->user->name}}</td>
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
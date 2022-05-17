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
     <div class="container-fluid page-body-wrapper" >
     
     <div class="container" align="center" style="padding-top: 10px;">
     <div class="table-responsive">
     <table class="table caption-top" style="color: white;" >
     @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
     <caption>List of users</caption>
  <thead>
    <tr  style="background-color: white; font-size:20px;">
      <th scope="col" style="color:black; font-size:20px;">Name</th>
      <th scope="col"  style="color:black; font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($books as $book)
    <tr>
      <td>{{$book->user->name}}</td>
      <td>
      <a class="btn btn-success" 
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
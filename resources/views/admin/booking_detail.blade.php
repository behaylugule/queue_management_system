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
  <caption>List of users</caption>
  
  <thead>
    <tr  style="background-color: white; font-size:20px;">
      <th scope="col" style="color:black; font-size:20px;">Name</th>
      <th scope="col"  style="color:black; font-size:20px;">Price</th>
    </tr>
  </thead>
  <tbody>
      @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->price}} birr</td>
    </tr>
    @endforeach
      <tr>
         <th style="font-size:20px;">Total Price</th>
         <td style="font-size:20px;">{{$totalPrice}} birr</td>      
        </tr>
        <tr>
        <td>
            <a class="btn btn-danger" onclick="return  confirm('are u sure you want remove the booking?')"
            href="{{url('booking_finish',$book->id)}}"  >Finish</a>
        </td>
        </tr>
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
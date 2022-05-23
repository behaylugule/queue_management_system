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
     <div class="container-fluid page-body-wrapper" style="background-color:white">
     <div class="container" align="center" style="padding-top: 10px;">
     <div class="table-responsive" style="background-color:black">
     <table class="table caption-top" style="color: white;" >
  <caption style="font-weight:bold; padding:10px; color:white">List of users</caption>
  <thead>
    <tr  style="background-color: white; font-size:20px;">
      <th scope="col" style="color:black; font-size:20px;">Name</th>
      <th scope="col"  style="color:black; font-size:20px;">Price</th>
      <th scope="col"  style="color:black; font-size:20px;">Catagory</th>
      <th scope="col"  style="color:black; font-size:20px;">Description</th>
      <th scope="col"  style="color:black; font-size:20px;">Booking Type</th>
      <th scope="col"  style="color:black; font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->price}} birr</td>
      <td>{{$item->catagory}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->bookingtype}}</td>
      <td>
      <a class="btn btn-success" 
            href="{{url('updateitem',$item->id)}}">Update</a>
           <a class="btn btn-danger" onclick="return confirm('are u sure to delete this?')"
            href="{{url('delete_item',$item->id)}}">Delete</a>
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
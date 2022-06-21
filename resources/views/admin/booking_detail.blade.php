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
  <body  class="bg-light text-black">
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
    <tr class="bg-black text-white" style="background-color: white; font-size:20px;">
      <th scope="col">Name</th>
      <th scope="col">Price(1)</th>
      <th scope="col">quantity</th>
      <th scope="col">Price(all qu)</th>
    </tr>
    
  </thead>
  <tbody class="bg-light text-black">
      @foreach($user->items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <th>{{$item->pivot->quantity}}</th>
        <th>{{(float)$item->price * (int)$item->pivot->quantity}}</th>      
      </tr>
      @endforeach
      <tr>
        <td>Total Price</td>
        <td>{{$totalPrice}}</td>
        <td></td>
        <td></td>
      </tr>
        <tr>
        <td>
           
        </td>
        <td></td>
        <td></td>
        <td>
        <a class="btn btn-primary" onclick="return  confirm('are u sure you want remove the booking?')"
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
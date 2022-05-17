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
     <div class="container-fluid page-body-wrapper"  align="center">

      <div class="container" align="center" style="padding-top: 100px;">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif       
      <form action="{{url('update_item',$item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <label for="">Name</label>
              <input type="text" name="name" style="color:black"  value="{{$item->name}}" placeholder="Write the name" required >
            </div>
            <div style="padding:15px">
              <label for="">Price</label>
              <input type="number" style="color:black" name="price"  value="{{$item->price}}" placeholder="Write the price" required>
            </div>
            <div style="padding:15px">
              <label for="">Catagory</label>
              <input type="text" style="color:black" name="catagory" value="{{$item->catagory}}" required>
            </div>
           
            <div style="padding:15px">
              <label for="">Description</label>
               <textarea name="description" id="" cols="30" rows="5" style="color:black"
            required> {{$item->description}} </textarea>
            </div>
            <div style="padding:15px">
              <label for="">Image</label>
              <input type="file" style="color:black" name="file" >
            </div>
            <div style="padding:15px">
              <label for="">Booking Type</label>
              <input type="text" name="bookingtype" style="color:black; width:400px;"  value="{{$item->bookingtype}}" placeholder="All, Member, number that the user take" >
            </div>

            <div style="padding:15px">
              <input type="submit" class="btn btn-success" value="update">
            </div>
         </form>
      </div>
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
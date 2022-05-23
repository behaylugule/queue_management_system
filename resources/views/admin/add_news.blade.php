<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
      label{
        display:inline-block;
        width:200px;
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
     
      <div class="container" align="center" style="padding-top: 100px;">
      @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
       
       <form action="{{url('create_news')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <label for="" style="color:black">Title</label>
              <input type="text" name="title" style="color:black" placeholder="Write the title" required >
            </div>
            <div style="padding:15px">
              <label for="" style="color:black">Detail</label>
               <textarea name="description" id="" cols="20" rows="2" style="color:black"
               placeholder="Write description about the item" required></textarea>
            </div>
            <div style="padding:15px">
              <label for="" style="color:black">Eligibility</label>
               <textarea name="eligibility" id="" cols="20" rows="2" style="color:black"
               placeholder="Write eligibility of the item" required></textarea>
            </div>
            <div style="padding:15px">
              <label for="" style="color:black">Image</label>
              <input type="file" style="color:black" name="file" >
            </div>
            <div style="padding:15px">
              <input type="submit" class="btn btn-success" value="Add Item" style="color:black">
            </div>
         </form>
   </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>



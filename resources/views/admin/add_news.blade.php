<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
      label{
        display:inline-block;
        width:150px;
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
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}                    
         <button type="button" class="btn-close fs-4" text-align=center data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>
       @endif
       
       <form action="{{url('create_news')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <label for="" style="color:black" class="fw-bold">Title</label>
              <input type="text" name="title" style="color:black" placeholder="Write the title" required >
            </div>
            <div style="padding:15px">
              <label for="" style="color:black" class="fw-bold">Detail</label>
               <textarea name="description" id="" cols="20" rows="2" style="color:black"
               placeholder="Write description about the item" required></textarea>
            </div>
            <div style="padding:15px">
              <label for="" style="color:black" class="fw-bold">Eligibility</label>
               <textarea name="eligibility" id="" cols="20" rows="2" style="color:black"
               placeholder="Write eligibility of the item" required></textarea>
            </div>
            <div style="padding:15px">
              <label for="" style="color:black" class="fw-bold">Image</label>
              <input type="file" style="color:black" name="file" >
            </div>
            <div style="padding:15px">
              <input type="submit" class="btn btn-success" value="Add News" style="color:black">
            </div>
         </form>
   </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>



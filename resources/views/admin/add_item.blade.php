<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
      /* label{
        display:inline-block;
        width:250px
      } */
    </style>
    @include('admin.css') 
   
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
     <div class="container-fluid page-body-wrapper"  align="center" style="background-color:white">
    
      <div class="container" align="center" style="padding-top: 100px;">
      @if(session()->has('message'))   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}                    
         <button type="button" class="btn-close fs-4" text-align=center data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>

       
       @endif
      <form action="{{url('upload_item')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div style="padding:15px" class="col-md-3  ">
                <label for="" style="color:black" class="m-2 fw-bold  ">Name  </label>
                <input type="text" name="name" style="color:black" placeholder="Write the name" required >
              </div>
              <div style="padding:15px" class="col-md-3 mr-5">
                <label for="" style="color:black" class="m-2 fw-bold">Price</label>
                <input type="text" style="color:black" name="price" placeholder="Write the price" required>
              </div>
            
              <div style="padding:15px" class="col-md-3 mr-5">
                <label for="" style="color:black" class="m-2 fw-bold">Max Quantity</label>
                <input type="number" style="color:black" name="max_quantity" placeholder="Write the maximum quantity" min="1" required>
              </div>
              <div style="padding:15px" class="col-md-3">
                <label for="" style="color:black" class="m-2 fw-bold">Catagory</label>
                <select name="catagory" style="color:black;width:200px" id="" required>
                  <option value="">--Select--</option>
                  <option value="deteregent">Deteregent</option>
                  <option value="food">Food</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            
            <div class="row">
              <div style="padding:15px" class="col-md-4">
                <label for="" style="color:black" class="m-2 fw-bold">Description</label>
                <textarea name="description" id="" cols="30" rows="2" style="color:black"
                placeholder="Write description about the item" required></textarea>
              </div>
              
              <div style="padding:15px" class="col-md-4" >
                <label for="" style="color:black" class="m-2 fw-bold">Booking Type</label>
                <input type="text" name="bookingtype" style="color:black; width:250px;" placeholder="All, Member,..." >
              </div>

              <div style="padding:15px" class="col-md-4" >
                <label for="" style="color:black" class="m-2 fw-bold">Image</label>
                <input type="file" style="color:black" name="file" >
              </div>
              
            </div>
            
            <div style="padding:15px" >
              <input type="submit" class="btn btn-success" style="color:black; " value="Add Item">
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
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
    <div class="container-scroller ">
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
     <div class="container-fluid page-body-wrapper" style="background-color:white" >
     <div class="container" align="center" style="padding-top: 10px;">
     @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
       <h4 class="text-black p-4 fw-bold fs-5 text-start " >User per hour</h4>
     <div class="table-responsive">
     <table class="table caption-top" style="color: white;" >
  
  <thead class="text-white bg-black">
    <tr  >
      <th scope="col"  style=" font-size:20px;">Number</th>
      <th scope="col"  style=" font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody class="text-black">
    <tr>
      <td>{{$number->number}}</td>
      <td>
      <button type="button" class="btn btn-primary text-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Edit
</button>

      </td>
    </tr>
   </tbody>
  </table>
   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog   bg-light">
    <div class="modal-content  bg-light text-dark" >
      <div class="modal-header " >
        <h5 class="modal-title" id="staticBackdropLabel">Update number of user per hour title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{url('update_user_per_hour',$number->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <label for="">user per hour</label>
              <input type="number" name="number" value="{{$number->number}}" style="color:black" placeholder="write the number" required />
            </div>
            <div style="padding:15px,  ">
              <input type="submit" class="btn btn-success bg-success" value="Update">
            </div>
    </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 </div>
</div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
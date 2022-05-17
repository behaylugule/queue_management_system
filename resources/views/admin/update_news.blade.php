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
     <div class="container-fluid page-body-wrapper">
     
      <div class="container" align="center" style="padding-top: 100px;">
      @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
       
       <form action="{{url('update_news',$news->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
              <label for="">Title</label>
              <input type="text" name="title" value={{$news->title}} style="color:black" placeholder="Write the title" required >
            </div>
            <div style="padding:15px">
              <label for="">Detail</label>
               <textarea name="description" id="" cols="30" rows="3" style="color:black"
               placeholder="Write description about the item" required>
                {{$news->description}}
            </textarea>
            </div>
            <div style="padding:15px">
              <label for="">Eligibility</label>
               <textarea name="eligibility" id="" cols="30" rows="5" style="color:black"
               placeholder="Write eligibility of the item" required>
              {{$news->eligibility}}
            </textarea>
            </div>
            <div style="padding:15px">
              <label for="">Image</label>
              <input type="file" style="color:black" name="file" >
            </div>
            <div style="padding:15px">
              <input type="submit" class="btn btn-success" value="Add Item">
            </div>
         </form>
   </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>



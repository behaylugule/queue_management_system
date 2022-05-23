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
<div class="container-fluid page-body-wrapper" style="background-color:white" align="center">   
  <div class="container d-flex align-item-center justify-content-center" align="center" >
 <div class="card mb-3 border border-white"  >
     @if($news->image)
  <img src="newsimage/{{$news->image}}" class="card-img-top" alt="..." style="height:30vw; width:50vw" >
    @else
    <img src="newsimage/none.jpg" class="card-img-top" alt="..." style="height:300px; width:70vw">
  @endif
  <div class="card-body" style="background-color:white">
    <h5 class="card-title"style="color:black">{{$news->title}}</h5>
    <p class="card-text"style="color:black">{{$news->description}}</p>
    <p class="card-text"style="color:black">{{$news->eligibility}}</p>
  </div>
  <div class="card-body" style="background-color:white">
  <a href="{{url('updatenews',$news->id)}}" class="btn btn-primary">update</a>
  <a href="{{url('delete_news',$news->id)}}" class="btn btn-danger" onclick="return confirm('are u sure to delete this?')">delete</a>
  </div>
</div>
 </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
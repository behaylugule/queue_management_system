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
  <div class="container" align="center" style="display:flex;padding-top: 10px;margin-top:40px">
 <div class="card mb-3">
     @if($news->image)
  <img src="newsimage/{{$news->image}}" class="card-img-top" alt="..." style="height:300px; width:70vw">
    @else
    <img src="newsimage/none.jpg" class="card-img-top" alt="..." style="height:300px; width:70vw">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$news->title}}</h5>
    <p class="card-text">{{$news->description}}</p>
    <p class="card-text">{{$news->eligibility}}</p>
  </div>
  <div class="card-body">
  <a href="{{url('updatenews',$news->id)}}" class="btn btn-primary">update</a>
  <a href="{{url('delete_news',$news->id)}}" class="btn btn-danger" onclick="return confirm('are u sure to delete this?')">delete</a>
  </div>
  <div>@comments(['model' => $news])</div> 
</div>
 </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
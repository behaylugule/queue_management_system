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
@if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif 
  <div class="container" align="center" style="display:flex;padding-top: 10px;">
  
 

  @foreach($news as $new)
  
 <div class="card" style="width: 10rem; height:10rem; margin-right: 15px;">
 @if($new->image)
  <img src="newsimage/{{$new->image}}" class="card-img-top" alt="..." style="height: 150px;">
    @else
    <img src="newsimage/none.jpg" class="card-img-top" alt="..." style="height:150px;">
  @endif  
    <div class="card-body">
        <h5 class="card-title">{{$new->title}}</h5>
    </div>
    <a href="{{url('single_news',$new->id)}}" class="btn btn-primary" style="width:100px;">more</a>
</div>
@endforeach
 </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
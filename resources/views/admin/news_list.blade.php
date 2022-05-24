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
    
<div class="container-fluid page-body-wrapper" style="background-color:white">

@if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif 

     <div class="container" align="center" style="padding-top: 10px;">
     <div class="col-12">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
              <h4 class="text-black p-4 fw-bold fs-5 " >List of News</h4>
              <form  type="get" action="{{url('/searchnewsadmin')}}">
                    @csrf
                    <div class="input-group">
                      <input class="form-outline mr-sm-2 text-black border border-primary" type="search" value = "{{!empty(app('request')->input('query')) ? app('request')->input('query') : '' }}" name="query" placeholder="Search" arail-label="search"/>
                      <button type="submit" class="btn btn-primary">
                          <i class="fas fa-search "></i>
                      </button>
                    </div>
                  </form>
              </div>
        </div>

     <div class="table-responsive " style="background-color:black;max-height:500px">
     <table class="table" style="color: white; " >
  <div class="container" align="center" style="display:flex;padding-top: 10px;">
  <thead >
    <tr  style="background-color: black; font-size:20px;">
      <th scope="col" style="color:light; font-size:20px;">Title</th>
      <th scope="col"  style="color:light; font-size:20px;">Description</th>
      <th scope="col"  style="color:light; font-size:20px;">Eligibility</th>
      <!-- <th scope="col"  style="color:light; font-size:20px;">Image</th> -->
      <th scope="col"  style="color:light; font-size:20px;">Action</th>
    </tr>
  </thead >
  <tbody style="color:black; background-color:white">

  @foreach($news as $new)

  <tr>
      <td>{{$new->title}}</td>
      <td  >
      <p >{{$new->description}}</p></td>
      <td>{{$new->eligibility}}</td>
     <!-- <td> @if($new->image)
  <img src="newsimage/{{$new->image}}" class="card-img-top" alt="..." style="height: 150px;width:150px" >
    @else
    <img src="newsimage/none.jpg" class="card-img-top" alt="..." style="height:150px;">
  @endif </td> -->
      <td>
      <a href="{{url('single_news',$new->id)}}" class="btn btn-primary" style="width:100px;">Detail</a>
           <a class="btn btn-danger" onclick="return confirm('are u sure to delete this?')"
            href="{{url('delete_item',$new->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
   </tbody>
  </table>
 
    

 </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>


  
  
    
    
 
    
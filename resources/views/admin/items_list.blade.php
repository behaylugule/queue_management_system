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
     <div class="container" align="center" style="padding-top: 10px;">
     @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}                    
         <button type="button" class="btn-close fs-4" text-align=center data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>
       @endif 
     <div class="col-12">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
              <h4 class="text-black p-4 fw-bold fs-5 " >List of Items</h4>
              <form  type="get" action="{{url('/searchitemsadmin')}}">
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

     <div class="table-responsive" style="background-color:black; max-height:500px;">
     <table class="table " style="color: white;" >
  <thead>
  
    <tr  style="background-color: black; font-size:20px;">
      <th scope="col" style="color:light; font-size:20px;">Name</th>
      <th scope="col"  style="color:light; font-size:20px;">Price</th>
      <th scope="col"  style="color:light; font-size:20px;">Catagory</th>
      <th scope="col"  style="color:light; font-size:20px;">Description</th>
      <th scope="col"  style="color:light; font-size:20px;">Booking Type</th>
      <th scope="col"  style="color:light; font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody style="background-color:white; color:black">
      @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->price}} birr</td>
      <td>{{$item->catagory}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->bookingtype}}</td>
      <td>
      <a class="btn btn-success" 
            href="{{url('updateitem',$item->id)}}">Update</a>
           <a class="btn btn-danger" onclick="return confirm('are u sure to delete this?')"
            href="{{url('delete_item',$item->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
   </tbody>
  </table>
 </div>
</div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
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
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
     <div class="table-responsive" style="background-color:black">
     <table class="table caption-top" style="color: white;" >
  <caption style="font-weight:bold; color:white; padding:10px">List of users</caption>
  <thead>
    <tr  style=" font-size:20px;">
      <th scope="col" style=" font-size:20px;">From</th>
      <th scope="col" style=" font-size:20px;">To</th>
      <th scope="col"  style=" font-size:20px;">Count</th>
      <th scope="col"  style=" font-size:20px;">Enable</th>
      <th scope="col"  style=" font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody class="bg-white text-black">
      @foreach($times as $time)
    <tr>
      <td>{{$time->from}}</td>
      <td>{{$time->to}}</td>
      <td>{{$time->count}} </td>
      <td>{{$time->enable===0?'disabled':'Enabled'}}</td>
      
      <td>
      <a class="btn btn-success" 
            href="{{url('update_time_table',$time->id)}}">{{$time->enable===0?'Enable':'Disable'}}</a>
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
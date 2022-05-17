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
     <div class="container" align="center" style="padding-top: 10px;">
     @if(session()->has('message'))
        <div class="alert alert-success">
         
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif
     <div class="table-responsive">
     <table class="table caption-top" style="color: white;" >
  <caption>List of users</caption>
  <thead>
    <tr  style="background-color: white; font-size:20px;">
      <th scope="col" style="color:black; font-size:20px;">From</th>
      <th scope="col" style="color:black; font-size:20px;">To</th>
      <th scope="col"  style="color:black; font-size:20px;">Count</th>
      <th scope="col"  style="color:black; font-size:20px;">Enable</th>
      <th scope="col"  style="color:black; font-size:20px;">Action</th>
    </tr>
  </thead>
  <tbody>
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
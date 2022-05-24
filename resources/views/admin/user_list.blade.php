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
    <style>
        
    </style>
     <script>
        function printContent(el){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
         }
     </script> 
  </head>
  <body>
  <div class="container-scroller ">
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
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
              <h4 class="text-black p-4 fw-bold fs-5 " >List of User</h4>
              <form  type="get" action="{{url('/searchuser')}}">
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
        <div class="table-responsive " style="background:black; color:black; max-height:500px"  id="table">
            <table class="table caption-top" style="color:white;">
            <caption style="font-weight:bold; padding:10px; color:white">List of users</caption>
                <thead  >
                    <tr >
                    <th scope="col">Full Name (id)</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Email</th>
                    <th scope="col">Join at</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @if(count($users)>0)
                @foreach($users as $user)
                    <tr>
                    <th scope="row">{{$user->name }} ( {{ $user->id}} )</th>
                    <td>{{$user->occupation}} </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <th scope="col">
                      <a class="btn btn-success" 
                      href="{{url('addmember',$user->id)}}"
                       onclick="return confirm('are u sure to add member this user this?')">
                      {{$user->ismember?"RemoveFromMember":"AddToMember"}}</a>
                      <a class="btn btn-danger" onclick="return confirm('are u sure to delete this?')"
                        href="{{url('deleteuser',$user->id)}}">Delete</a>
                    </th>
                    </tr>
                @endforeach
                
                    @else
                     <p class="alert alert-danger"> No User Found</p>
                 @endif
                </tbody>
                  
            </table>
        </div>
        <button style="background:grey; color:black; padding:10px; margin-top:10px " 
         onclick="printContent('table')" >Print Content</button>
    </div>
  </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
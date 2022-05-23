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
  <div class="container-scroller " style="background-color:white">
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

        <div class="table-responsive " style="background:black; color:white; "  id="table">
            <table class="table caption-top" style="color:white;">
            <caption>List of users</caption>
                <thead  >
                    <tr >
                    <th scope="col">Name (id)</th>
                    <th scope="col">Booking Time</th>
                    <th scope="col">Item</th>
                    <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @if(count($stories)>0)
                @foreach($stories as $story)
                    <tr>
                    <th scope="row">{{$story->user->name }} ( {{ $story->user->id}} )</th>
                    <td>{{$story->time->from ." "}} -  {{$story->time->to }}</td>
                    <td>{{$story->items}}</td>
                    <td>{{$story->created_at}}</td>
                    </tr>
                @endforeach
                    @else
                     <p class="alert alert-danger"> No Story Found</p>
                 @endif
                </tbody>
                  
            </table>
        </div>
        <button style="background:grey;  color:black; padding:10px; margin-top:30px;"
         onclick="printContent('table')" >Print Content</button>
    </div>
  </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
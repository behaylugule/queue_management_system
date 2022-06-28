<div class="main-panel" style="background-color: white">

  <div class="content-wrapper" align="center" style="background-color: white">
    <div class="row" >
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$user}}</h3>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                <span class="iconify" data-icon="ic:baseline-people-alt" data-width="50" data-height="50"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total users</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$item}}</h3>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                <span class="iconify" data-icon="ic:sharp-add-shopping-cart" data-width="50" data-height="50"></span> 
              </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total items</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$news}}</h3>
                 
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                <span class="iconify" data-icon="ic:twotone-newspaper" data-width="50" data-height="50"></span> 
              </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total News</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$booking}}</h3>
                  {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                <span class="iconify" data-icon="ic:sharp-bookmark-add" data-width="50" data-height="50"></span>
              </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total Bookings</h6>
          </div>
        </div>
      </div>
      {{-- story table detail --}}

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
       
      
    
  </div>


       </div> -->
        <!-- main-panel ends -->
      </div>
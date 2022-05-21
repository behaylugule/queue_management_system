<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AASTU queue management system</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
  	<link href="css/magnific-popup.css" rel="stylesheet">
  	<link href="css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <style>.section {
    position: relative;
    height: 100vh;
} 
.section-center {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    
}


@media screen and (max-width: 600px) {
    .section-center {
        position: absolute;
        top: 400px;
  }
}

</style>
  </head>
    <body>
      
       
    @include('user.navbar')
    <div class="container-fluid py-3" style="margin-top:100px">
      <div class="container mt-lg-4 mt-sm-0">
        <div id="booking" class="section-center">
          <div class="container">
            @if(session()->has('message'))
              <div class="alert alert-success">
              {{session()->get('message')}}
              <button type="button" class="close" data-dismiss="alert">
                x
              </button>
             </div> 
             @endif 
            <div class="row">
                <div class="col-md-7 col-md-push-5">
        <div class="table-responsive">       
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        @if(!$book)
                          <td>
                              <a class="btn btn-danger" style="pointer-events:{{$book?'none':''}};background-color:{{$book?'gray':''}}"
                          onclick="return  confirm('are u sure to remove this item from cart?')"
                          href="{{url('remove_from_cart',$item->id)}}"  >Remove</a>
                          </td>
                        @endif
                </tr>
                @endforeach
            </tbody>
            <tr>
                <th>Total Price</th>
                <td>{{$totalPrice}}</td>
                
            </tr>
            @if($book)
            <tr>
                <th>book status </th>
                <td>your booking time</td>
                <td>{{$booking->time->from}}AM-{{$booking->time->to}}AM </td>    
            </tr>
            @endif
            </table>
      </div>
 </div>
 
 @if(!$book)
    <div class="col-md-4 col-md-pull-7">
                
     <div class="card" style="width: 28rem;">
        <div class="card-body">
          <h1 class="h2" align="center" style="margin-bottom:50px">Book Now</h1>
         <form action="{{url('booking')}}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="form-group">
                    <label class="form-label" for='item'>Choose Time</label>
                    <select class="form-select"  aria-label="select example" name='time' required>
                        @foreach($times as $time)
                        <option value="{{$time->id}}" {{($time->enable)?"":"disabled"}}>{{$time->from}}am -{{$time->to}}am LT {{$userPerHour->number}}</option>
                        @endforeach
                </div>
                <div class="form-group" >
                   <input type="submit"  {{($book)?"disabled":""}} class="btn btn-primary" style="background-color:#0275d8;margin-top:20px" value="Book" />
               </div>
            </form>
                      </div>
                   </div>
                </div>
            </div>
        </div>
      @endif
    </div>
      </div>
      
        {{-- @include('user.footer') --}}
     
		 

  <!-- //for header -->	
  <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
  <!-- //for header_end -->	
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
       
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>AASTU queue management system</title>
       
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">	

  </head>
  <body>
  @include('user.navbar')
	        <!-- Top News Slider Start -->

   
    <!-- News With Sidebar End -->

 <!-- News With Sidebar Start -->
 <div class="container-fluid py-3" style="margin-top:100px">
 @if(session()->has('message'))   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}                    
         <button type="button" class="btn-close fs-4" text-align=center data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>

       
       @endif    
     <!-- Wrapper container -->
     <div class="row">
     <div class="col-md-6 col-sm-12 p-4 d-flex align-items-center justify-content-center" >
          <div class="footer-col last">
              
              <ul class="list-unstyled li-space-lg p-small">
                  <li class="media d-flex justify-content-between mt-5" style="width: 200px; hieght:30px">
                      <i class="fas fa-map-marker-alt text-primary fs-2 mr-5"></i>
                      <div class="media-body">Kilinto</div>
                  </li>
                  <li class="media d-flex justify-content-between mt-5" style="width: 200px;  hieght:30px">
                      <i class="fas fa-envelope text-primary fs-2 mr-5"></i>
                      <div class="media-body"><a class="text-black" href="mailto:contact@tivo.com">contact@aastu.com</a> </div>
                  </li>
                  <li class="media d-flex justify-content-between mt-5" style="width: 200px;  hieght:30px">
                      <i class="fas fa-globe text-primary fs-2 mr-5"></i>
                      <div class="media-body"><a class="text-black" href="https://www.aastu.edu.et">www.astuque.com</a></div>
                  </li>
              </ul>
          </div> 
        </div>
        <div class="col-md-6 col-sm-12 p-4" >
            <!-- Bootstrap 5 starter form -->
            <form action="{{url('send_email')}}" method="POST" enctype="multipart/form-data" id="contactForm" >
            @csrf
            <!-- Name input -->
            <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" name='name' type="text" placeholder="Name" />
            </div>

            <!-- Email address input -->
            <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" name='email' placeholder="Email Address" />
            </div>

            <!-- Message input -->
            <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
            <button class="btn btn-primary " type="submit" style="color:black; width: 100px;">Submit</button>
            </div>

            </form>
        </div>
       
</div>
</div>
    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    

		 
  <!-- //for header -->	
 
  <!-- //for header_end -->	
  
    <!-- //for slider -->
  
  <!-- //for slider_end -->
  
  <!-- //for header_end -->	
  
    <!-- //for slider -->

    <script src="js/jquery.min.js"></> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
   
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>AASTU queue management system</title>
   
	
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  @include('user.navbar')
    <div class="container-fluid py-3" style="margin-top:100px">
     @if(session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
        </div> 
       @endif      
        <div class="container mt-lg-4 mt-sm-0">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class=" d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Items</h3>
                                <form  type="get" action="{{url('/search')}}">
                                  @csrf
                                  <div class="input-group">
                                    <input class="form-outline mr-sm-2" type="search" value = "{{!empty(app('request')->input('query')) ? app('request')->input('query') : '' }}" name="query" placeholder="Search" arail-label="search"/>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                  </div>
                                </form>
                             </div>
                        </div>
                        @if(count($items)>0)
                            @foreach($items as $item)
                                <div class="col-lg-3 bg-light  mr-3 shadow-md mb-5 " align="center">
                                 <a href="{{url('items',$item->id)}}"> 
                                     <div class="position-relative mb-3">
                                        <img class="img-fluid w-100 " style="height:100px;object-fit:contain;" src="itemimage/{{$item->image}}" style="object-fit: cover;">
                                        <div class="overlay position-relative bg-light">
                                            <h4 class="h4 mt-2 ">{{$item->name}}</h4>
                                        </div>
                                      </div>
                                    </a> 
                                </div>
                                <!-- <div class="modal" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                   
                                    <div class="modal-header">
                                         <h4 class="h4">{{$item->name}}</h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    
                                    <div class="modal-body">
                                           
                                            <p class="m-0">{{$item->description}}</p>
                                            <h6 class="dt">price:-{{$item->price}}</h6>
                                            @if(!$book)
                                            <a href="{{url('attach',$item->id)}}" 
                                            class="btn btn-primary  mt-5" 
                                            style="pointer-events:{{$book?'none':''}};" >Add to cart</a>
                                            @endif
                                    </div>

                                   
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger text-dark" data-bs-dismiss="modal">Close</button>
                                    </div>

                                    </div> 
                                </div>
                            </div>
                            --> 
                                
                            @endforeach
                        @else
                          <p class="alert alert-danger"> No item Found</p>
                        @endif
                    </div>
                    {{$items->onEachSide(1)->links()}}
                </div>
                
                
                <div class="col-lg-4 pt-3 pt-lg-0">

                    <!-- Ads Start -->
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Open to promo</h3>
                    </div>
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                    </div>

                    
                    <!-- Ads End -->
                    <!-- Social Follow Start -->
                    <div class="pb-3" >
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        {{-- <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div> --}}
                    </div>
                    <!-- Social Follow End -->
                    <!-- Popular News Start -->
                </div>
            </div>
        </div>
     </div>
    </div>
    <!-- News With Sidebar End -->


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

    <script src="../js/jquery.min.js"></> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->
 
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
	</body>
       
</html>

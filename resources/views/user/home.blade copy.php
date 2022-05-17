
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
   
    <link href="css/element.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
@include('user.navbar')   
<!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>SaaS App HTML Landing Page</h1>
                            <p class="p-large">Use Tivo to automate your marketing actions in order to reach a much larger audience</p>
                            <a class="btn-solid-lg page-scroll" href="sign-up.html">BOOKING</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="images/header-software-app.png" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <section id="center">
		  <div class="container">
		    <div class="row">
			 <div class="col-sm-12 center_main">
			  <div class="col-sm-2">
			   <div class="center_1">
			     <ul>
					  <li><a class="icon_1" href="#"><i class="fa fa-envelope"></i>Email</a></li>
					  <li><a class="icon_2" href="#"><i class="fa fa-newspaper-o"></i>World</a></li>
					  <li><a class="icon_3" href="#"><i class="fa fa-fighter-jet"></i>Views</a></li>
					  <li><a class="icon_4" href="#"><i class="fa fa-gamepad"></i>Game</a></li>
					  <li><a class="icon_1" href="#"><i class="fa fa-cube"></i>Popular</a></li>
					  <li><a class="icon_2" href="#"><i class="fa fa-power-off"></i>Political</a></li>
					  <li><a class="icon_3" href="#"><i class="fa fa-certificate"></i>Hollywood</a></li>
					  <li><a class="icon_4" href="#"><i class="fa fa-tv"></i>Pc</a></li>
					   <li><a class="icon_1" href="#"><i class="fa fa-play"></i>Videos</a></li>
					  <li><a class="icon_2" href="#"><i class="fa fa-mobile"></i>Mobile</a></li>
					  <li><a class="icon_3" href="#"><i class="fa fa-dot-circle-o"></i>Extra</a></li>
					 
				 </ul>
				 <div class="home_1"><a href="#">Subscribe</a></div>
			   </div>
			  </div>
			  <div class="col-sm-7">
			   <div class="col-sm-12 center_2">
			     <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="img/1.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="img/79.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="img/80.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="img/81.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="img/82.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="img/83.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/v8lxB#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/v8lxB#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text">
                                    <h2>Slider One</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    <p class="sub-text">October 25 2014 - <a href="#">Read more</a></p>
                                </div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris.</p>
                                    <p class="sub-text">October 26 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>  Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
                                    <p class="sub-text">October 27 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p> Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris ligula in libero.Sed dignissim lacinia nunc.</p>
                                    <p class="sub-text">October 28 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p> Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
                                    <p class="sub-text">October 29 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>  Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                    <p class="sub-text">October 30 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p> Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta.Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
                                    <p class="sub-text">October 31 2014 - <a href="#">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="img/4.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="img/84.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="img/2.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="img/85.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="img/3.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="img/5.jpg"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/6.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a href="#">America</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Ligula in libero</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/7.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text" href="#">Brought</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Ligula in libero</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/8.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_1" href="#">Fashion</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Ligula in libero</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/9.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia </a></p>
							<span><a href="#">Latest</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/10.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia</a></p>
							<span><a href="#">Popular</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/11.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a  href="#">Brazil</a></h5>
					 <h4>
					 <a class="color_text" href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/12.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia </a></p>
							<span><a href="#">Popularity</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/13.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia </a></p>
							<span><a href="#">Celebrity</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/14.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_1" href="#">Community</a></h5>
					 <h4>
					 <a class="color_text" href="#">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/15.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia </a></p>
							<span><a href="#">Trending</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/16.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia </a></p>
							<span><a href="#">News</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/17.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_2"  href="#">Fashion</a></h5>
					 <h4>
					 <a class="color_text" href="#">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Ligula in Libero</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/18.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia </a></p>
							<span><a href="#">World</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/19.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia</a></p>
							<span><a href="#">Newest</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/20.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_1" href="#">Webnews</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/21.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_2" href="#">World</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/22.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_1" href="#">Views</a></h5>
					 <h4>
					 <a href="#">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit integer nec odio.
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Ligula in Libero</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_para_main">
			    <div class="center_para">
				 <h6><a href="#">Our World</a></h6>
				 <p class="p_1"><a href="#"> Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum<br> millions of people</a></p>
				 <p class="p_2">
				   
<a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </a>
				 </p>
				 <span class="color_text_1">Ligula in Libero</span>
				</div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/23.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_2" href="#">Assets</a></h5>
					 <h4>
					 <a href="#">
                        Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum millions of people
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/24.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a class="color_text_1" href="#">Produced</a></h5>
					 <h4>
					 <a href="#">
                        Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum millions of people
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				 </div>
			   </div>
			   <div class="col-sm-12 center_para_main">
			    <div class="center_para">
				 <h6><a href="#">Liabilities</a></h6>
				 <p class="p_1"><a href="#">Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum <br> millions of people</a></p>
				 <p class="p_2">
				   
<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </a>
				 </p>
				 <span class="color_text_2">Ligula in Libero</span>
				</div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/30.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a href="#">England</a></h5>
					 <h4>
					 <a class="color_text" href="#">
                        Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum millions of people
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/32.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia </a></p>
							<span><a href="#">Popular</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/33.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia </a></p>
							<span><a href="#">Trending</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_2_inner_main_1">
			     <div class="col-sm-4">
				   <div class="center_2_inner_1">
				     <a href="#"><img src="img/31.jpg" width="100%"></a>
				   </div>
				 </div>
				 <div class="col-sm-8">
				   <div class="center_2_inner_2">
				     <h5><a href="#">Australia</a></h5>
					 <h4>
					 <a class="color_text" href="#">
                        Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum millions of people
					 </a></h4>
					 <p><a href="#">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.<br><span>Sed Dignissim Lacinia</span>
					 </a></p>
				   </div>
				   <div class="col-sm-12 center_block">
				     <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/34.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Aptent taciti sociosqu ad litora torquent per conubia</a></p>
							<span><a href="#">Author</a></span>
						  </div>
						</div>
				     </div>
					 <div class="col-sm-6">
				        <div class="col-sm-4">
					  <div class="center_block_1">
					    <a href="#"><img src="img/35.jpg" width="100%"></a>
					  </div>
					</div>
					    <div class="col-sm-8">
						  <div class="center_block_2">
						    <p><a href="#">Curabitursodales ligula in libero lacinia nunc conubia </a></p>
							<span><a href="#">Writer</a></span>
						  </div>
						</div>
				     </div>
				   </div>
				   
				 </div>
			   </div>
			   <div class="col-sm-12 center_para_main">
			    <div class="center_para">
				 <h6><a href="#">Company</a></h6>
				 <p class="p_1"><a href="#">Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum <br> millions of people</a></p>
				 <p class="p_2">
				   
<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </a>
				 </p>
				 <span class="color_text_2">Sed Dignissim Lacinia</span>
				</div>
			   </div>
			  </div>
			  <div class="col-sm-3">
			    <div class="center_3">
				  <h5><a href="#">Popular Now</a></h5>
				  <div class="col-sm-12 center_3_inner">
				    <div class="col-sm-6">
					  <div class="center_3_inner_1">
					   <p><a href="#"><span>1.</span>  Lorem Ipsum </a></p>
					   <p><a href="#"><span>2.</span>  Dolor Sit </a></p>
					   <p><a href="#"><span>3.</span>  Nec Odio </a></p>
					   <p><a href="#"><span>4.</span>  Praesent Libero </a></p>
					   <p><a href="#"><span>5.</span>   Nulla Quis </a></p>
					  </div>
					</div>
					<div class="col-sm-6">
					  <div class="center_3_inner_1 space">
					   <p><a href="#"><span>6.</span>  Nibh Elementum  </a></p>
					   <p><a href="#"><span>7.</span>  Duis Sagittis </a></p>
					   <p><a href="#"><span>8.</span> Praesent Mauris </a></p>
					   <p><a href="#"><span>9.</span>  Solvation </a></p>
					   <p><a href="#"><span>10.</span> Sed Augue  </a></p>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-12 center_3_image">
				    <div class="media">
						<a href="#">
							<img class="media-object dp " src="img/25.jpg" width="100%">
						</a>
                     </div>
				  </div>
				  <div class="col-sm-12 weather">
				   <h4><a href="#">America<i class="fa fa-map-marker"></i></a></h4>
				   <div class="col-sm-3">
				    <div class="weather_1 text-center">
					  <p><a href="#">
					    <div class="day"><a href="#">Today</a></div>
						<div class="cloud_1"><i class="fa fa-cloud"></i></div>
						<h3><a href="#">35°</a></h3>
					  </a>
					  </p>
					</div>
				   </div>
				   <div class="col-sm-3">
				    <div class="weather_1 text-center">
					  <p><a href="#">
					    <div class="day"><a href="#">Thu</a></div>
						<div class="cloud_1 color_1"><i class="fa fa-sun-o"></i></div>
						<h3><a href="#">32°</a></h3>
					  </a>
					  </p>
					</div>
				   </div>
				   <div class="col-sm-3">
				    <div class="weather_1 text-center">
					  <p><a href="#">
					    <div class="day"><a href="#">Fri</a></div>
						<div class="cloud_1"><i class="fa fa-moon-o"></i></div>
						<h3><a href="#">36°</a></h3>
					  </a>
					  </p>
					</div>
				   </div>
				   <div class="col-sm-3">
				    <div class="weather_1 text-center">
					  <p><a href="#">
					    <div class="day"><a href="#">Sat</a></div>
						<div class="cloud_1 color_1"><i class="fa fa-sun-o"></i></div>
						<h3><a href="#">33°</a></h3>
					  </a>
					  </p>
					</div>
				   </div>
				  </div>
				  <div class="col-sm-12 center_3_link">
				   <a href="#"><img class="img-circle" src="img/26.jpg" width="100%"></a>
				   <p><a href="#">Good Evening World</a></p>
				   <h4><a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</a></h4>
				  </div>
				  <div class="col-sm-12 center_3_link">
				   <a href="#"><img class="img-circle" src="img/27.jpg" width="100%"></a>
				   <p><a href="#">World Hub</a></p>
				   <h4><a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</a></h4>
				  </div>
				  <div class="col-sm-12 center_3_image">
				    <div class="media">
						<a href="#">
							<img class="media-object dp " src="img/28.jpg" width="100%">
						</a>
                     </div>
				  </div>
				  <div class="col-sm-12 center_3_image">
				    <div class="media">
						<a href="#">
							<img class="media-object dp " src="img/29.jpg" width="100%">
						</a>
                     </div>
				  </div>
				</div>
			  </div>
			 </div>
			</div>
		  </div>
		 </section>
		

    <!-- Newsletter -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="above-heading">NEWSLETTER</div>
                        <h2>Stay Updated With The Latest News To Get More Qualified Leads</h2>

                        <!-- Newsletter Form -->
                        <form id="newsletterForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="nemail" required>
                                <label class="label-control" for="nemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="nterms" value="Agreed-to-Terms" required>I've read and agree to Tivo's written <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SUBSCRIBE</button>
                            </div>
                            <div class="form-message">
                                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of newsletter form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->


    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>About Tivo</h4>
                        <p class="p-small">We're passionate about designing and developing one of the best marketing apps in the market</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@tivo.com">contact@tivo.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.tivo.com</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
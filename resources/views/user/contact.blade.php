<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Headlines</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="css/element.css" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  </head>
  <body>
@include('user.navbar')		 
	    <section id="contact">
		  <div class="container">
		    <div class="row">
			 <div class="col-sm-12 center_main">
			  
			  <div class="col-sm-10">
			   <div class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="head_1">
                    Contact us </h1>
            </div>
        </div>
    </div>
</div>
 
              <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required"></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Select One:</option>
                                <option value="service">Our Services</option>
                                <option value="suggestions">Help & Suggestions</option>
                                <option value="product">Product Enquiry</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
              <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>&nbsp;Our Venue</legend>
            <address>
                <strong>Facebook, Inc.</strong><br>
                767 Lorem ipsum, sit 400<br>
                   consectetur, BA 10795<br>
                <abbr title="Phone">
                    C:</abbr>
                (564) 453-9867
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="#">info@gmail.com</a>
            </address>
            </form>
        </div>
  

			  </div>
			 </div>
			</div>
		  </div>
		 </section>
		 
		<section id="footer">
	   <div class="container">
	     <div class="row">
		   <div class="col-sm-12">
		     <div class="col-sm-3">
			   <div class="footer_1">
			     <h3>ABOUT US</h3>
				 <hr> 
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
			   </div>
			 </div>
			 <div class="col-sm-3">
			   <div class="footer_2">
			      <h3>CONTACT INFO</h3>
				 <hr>
				 <p><i class="glyphicon glyphicon-map-marker"></i>4543k Integer, 7th block,<br><span class="city">Dolor Sit City.</span></p>
				 <p><i class="glyphicon glyphicon-envelope"></i>info@gmail.com</p>
				 <p><i class="glyphicon glyphicon-earphone"></i>+1234 567 890</p>
			   </div> 
			 </div>
			 <div class="col-sm-3">
			  <div class="footer_3">
			     <h3>FLICKR POSTS</h3>
				 <hr>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/36.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/37.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/38.jpg"></a></div>
				   </div>
				 </div>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/39.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/40.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/41.jpg"></a></div>
				   </div>
				 </div>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/42.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/43.jpg"></a></div>
				   </div>
				   <div class="col-sm-4">
				     <div class="footer_3_image"><a href="#"><img src="img/44.jpg"></a></div>
				   </div>
				 </div>
			  </div>
			 </div>
			 <div class="col-sm-3">
			  <div class="footer_4 clearfix">
			    <h3>BLOG POSTS</h3>
				 <hr>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_4_image"><img src="img/45.jpg"></div>
				   </div>
				   <div class="col-sm-8">
				     <div class="footer_4_para">
					  <h4><a href="#">Nulla quis sem at nibh <br>Deserunt</h4></a><p>Posted On 15/4/2015</p>
					 </div>
				   </div>
				 </div>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_4_image"><img src="img/46.jpg"></div>
				   </div>
				   <div class="col-sm-8">
				     <div class="footer_4_para">
					  <h4><a href="#">Nulla quis sem at nibh <br>Deserunt</h4></a><p>Posted On 15/4/2015</p>
					 </div>
				   </div>
				 </div>
				 <div class="col-sm-12">
				   <div class="col-sm-4">
				     <div class="footer_4_image"><img src="img/47.jpg"></div>
				   </div>
				   <div class="col-sm-8">
				     <div class="footer_4_para">
					  <h4><a href="#">Nulla quis sem at nibh <br>Deserunt</h4></a><p>Posted On 15/4/2015</p>
					 </div>
				   </div>
				 </div>
			  </div>
			 </div>
		   </div>
		 </div>
	   </div>
	 </section>
	    
		<section id="footer_bottom">
	   <div class="container">
	    <div class="row">
		  <div class="col-sm-12">
		    <p> © 2013 Your Website Name. All Rights Reserved | Design by <a href="http://www.templateonweb.com">TemplateOnWeb</a></p>
		  </div>
		</div> 
	   </div>
	 </section>

  <!-- //for header -->	
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
  <!-- //for header_end -->	
  </body>
       
</html>

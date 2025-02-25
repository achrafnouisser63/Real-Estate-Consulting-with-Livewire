<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>IMMO GLOBAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="site2/materialize/css/materialize.min.css" media="screen,projection" />
<link href="site2/css/bootstrap.min.css" rel="stylesheet" />
<link href="site2/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="site2/css/flexslider.css" rel="stylesheet" /> 
<link href="site2/css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper"> 
	<header class="topbar">
		<div class="container">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3">
				   <ul class="social-network">
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
				</div>
			{{-- 	<div class="col-sm-9">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span>info@HillSide.com</span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(012) 345 6789</span></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div> --}}
				<!-- info -->

			</div>
		</div>
	</header>

	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top"  style="direction: rtl">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="{{url('/')}}" >GLOBAL<i class="icon-info-blocks material-icons" >IMMO</i></a>                </div>
				<div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                      
                    </li> 
						
						@if (Route::has('login'))
              
						@auth
                        <li><a class="waves-effect waves-dark"  href="{{ url('/dashboard') }}">استشاراتي</a></li>
						@else
                        <li><a class="waves-effect waves-dark"  href="{{ route('login') }}">تسجيل الذخول</a></li>
						@endauth
              
						@endif
						<li><a class="waves-effect waves-dark" href="{{ url('/consultation') }}">تقديم استشارة</a></li>
							<li><a class="waves-effect waves-dark" href="{{ url('/articles') }}"> مقالات قانونية</a></li>
                        <li><a class="waves-effect waves-dark" href="{{ url('/contact') }}">تواصل معنا</a></li>
                        <li><a class="waves-effect waves-dark" href="{{url('/')}}">الصفحة الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">تواصل معنا</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content"  style="direction: rtl">
	
	<div class="container"  style="direction: rtl">
		<div class="row"> 
							<div class="col-md-12" style="direction: rtl;">
								<div class="about-logo">
									<h3>لنكون فى <span class="color"> خدمتكم</span></h3>
									<p>نحن هنا للإجابة على استفساراتكم وتلقي ملاحظاتكم. لا تترددوا في التواصل مع فريق تلال العقارية دعونا نجعل التواصل سهلاً
									</p>
                                    	<p>تواصل معنا بسهولة عبر البريد الإلكتروني. دعنا نسمع منك ونكون على استعداد للإجابة على استفساراتك واستقبال رسائلك في أي وقت</p>
								</div>  
							</div>
						</div>
	<div class="row"  style="direction: rtl">
								<div class="col-md-6">
									<p> </p>


		   
			{{-- -------------------------------msg------------------ --}}
			@if (\Session::has('msg'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			 <strong>{!! \Session::get('msg') !!}.</strong> 
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			 </button>
		   </div>
		  @endif

          <form name="sentMessage" id="contactForm" action="send_message" method="post" novalidate> @csrf
		 <div class="input-field"> 
			<input type="text" name="name" class="form-control" 
			   	   id="name" required
			           data-validation-required-message="Please enter your name" />
					   <label for="name" class="">   الاسم الكامل </label> 
			  <p class="help-block"></p>
		   
	         </div> 	
                <div class="input-field"> 
			<input type="email" name="email"  pattern="[^ @]*@[^ @]*" class="form-control" id="email" required
			   		   data-validation-required-message="Please enter your email" /> 
					   <label for="name" class="">   البريد الالكتروني </label> 
	    </div> 	
			  
               <div class="input-field"> 
				 <textarea rows="10" cols="100" name="message" required class="form-control materialize-textarea" 
                       idation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						 <label for="name" class="">   الرسالة </label> 
		  </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">ارسل</button><br />
          </form>
								</div>
								<div class="col-md-6">
<script type="text/javascript" ></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	</div>
 
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Bootstrap company Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
						<li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
						<li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
						<li><a class="waves-effect waves-dark" href="#">Career</a></li>
						<li><a class="waves-effect waves-dark" href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Bootstrap Template 2018 All right reserved. </span><a href="https://webthemez.com/tag/free" target="_blank">Free HTML Templates</a> by WebThemez.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="site2/js/jquery.js"></script>
<script src="site2/js/jquery.easing.1.3.js"></script>
<script src="site2/materialize/js/materialize.min.js"></script>
<script src="site2/js/bootstrap.min.js"></script>
<script src="site2/js/jquery.fancybox.pack.js"></script>
<script src="site2/js/jquery.fancybox-media.js"></script>  
<script src="site2/js/jquery.flexslider.js"></script>
<script src="site2/js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="site2/js/modernizr.custom.js"></script>
<script src="site2/js/jquery.isotope.min.js"></script>
<script src="site2/js/jquery.magnific-popup.min.js"></script>
<script src="site2/js/animate.js"></script> 
<script src="site2/js/custom.js"></script>

 <script src="site2/contact/jqBootstrapValidation.js"></script>
 <script src="site2/contact/contact_me.js"></script>
</body>
</html>
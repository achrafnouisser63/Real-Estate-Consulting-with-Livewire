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
<link rel="stylesheet" href="{{URL::asset('site2/materialize/css/materialize.min.css" media="screen,projection')}}" />
<link href="{{URL::asset('site2/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('site2/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet"> 
<link href="{{URL::asset('site2/css/flexslider.css')}}" rel="stylesheet" /> 
<link rel="stylesheet" type="text/css" href="{{URL::asset('site2/css/zoomslider.css')}}" />
<link href="{{URL::asset('site2/css/style.css')}}" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page"> 
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
				<div class="col-sm-9">
					<div class="row">
						<ul class="info"> 
				{{-- 			<li><i class="icon-info-blocks material-icons">question_answer</i><span>info@immoglobale.com</span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(212) 633554422</span></li> --}}
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>
		
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><i class="icon-info-blocks material-icons">IMMO</i>GLOBALE</a>
                </div>
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
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
	<div id="demo-1" data-zs-src="[{{URL::asset('site2/img/photos/img1.jpg')}}, {{URL::asset('site2/img/photos/img2.jpg')}}, {{URL::asset('site2/img/photos/img3.jpg')}}]" data-zs-overlay="dots">
		<div class="demo-inner-content">
			<h1><span>IMMO GLOBAL</span></h1><br/>
			<p>أول و اكبر موقع استشارات عقارية في المغرب</p>
		</div>
	</div>
	<!-- end slider --> 
	</section>  
		<section class="projects">
		<div class="container">
	 	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">استشارات عقارية
				</h2><br>
					  <br> ، تهدف منصتناإلى تثقيف وكلاء العقارات والعملاء العقاريين في مجال العقارات ، وكذلك أولئك الذين يرغبون في دخول المجال العقاري أو لديهم أي نوايا صفقات
					نزود عملائنا بمعلومات دقيقة ومحددة حول ملكية العقارات ، ونحاول شرح مؤهلات العملاء بشكل كامل لفهم سوق العقارات وعملية التملك بشكل صحيح ، وكذلك تقديم معلومات قانونية مهمة حول التسجيل العقاري بعد الشراء ، حتى لا تواجههم في المستقبل اي مشكلة.


					<br/>
			</div>
		</div>
	
	<div class="row service-v1 margin-bottom-40" style="direction: rtl;">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="{{URL::asset('site2/img/service1.jpg')}}" alt="">   
                        </div>
                        <div class="card-content"> 
                            <p>
                                <span class="price" style="color:  white;font-weight: bold;">التطوير العقاري</span>
								
								{{-- <a href="details.html" class="btn btn-details">Details</a> --}}
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40" style="direction: rtl;">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="{{URL::asset('site2/img/service2.jpg')}}" alt="">   
                        </div>
                        <div class="card-content">
                           <p>
                                <span class="price" style="color:  white;font-weight: bold;">
									شراء و بيع العقارات</span>
							
							{{-- 	<a href="details.html" class="btn btn-details">Details</a> --}}
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40" style="direction: rtl;">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="{{URL::asset('site2/img/service3.jpg')}}" alt="">  
                        </div>
                        <div class="card-content">
                           <p>
                                <span class="price"style="color:  white;font-weight: bold;">تقييم العقارات</span>
								
								{{-- <a href="details.html" class="btn btn-details">Details</a> --}}
                            </p>
                        </div>
                    </div>        
            </div> 
        </div>
		</div>
		</section>
	<section id="content"> 
	<div class="container">
	
		<section class="services" style="direction: rtl;">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">لماذا تحتاج للاستشارة العقارية؟ </h2>استشارة خبير عقاري تعني الوصول إلى معلومات دقيقة وتقديم توجيه مباشر بشأن العقارات والاستثمارات العقارية. سواء كنت مستثمرًا عقاريًا محترفًا أم مبتدئًا، فإن الحصول على استشارة عقارية قوية يمكن أن يحد من المخاطر ويزيد من فرص النجاح.</div>
				<br/>
			</div>
		</div>

	 <div class="row">
           
            
            
        </div>
<div class="row">
            <div class="col-sm-4 info-blocks">
               
                <div class="info-blocks-in">
                    <h3>وفر وقتك ومجهودك</h3>
                    <p>عدم معرفتك بمجال العقارات من الممكن أن يهدر الكثير من الوقت والمجهود الخاص بك, مما يضعك تحت ضغط أنت في غنى عنه. نحن نقدم الاستشارات العقارية بشكل مجاني.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                
                <div class="info-blocks-in">
                    <h3>الجوانب القانونية</h3>
                    <p>من الممكن أن تغفل عن الجوانب القانوية الخاصة بعمليات البيع أو التأجير الخاصة بالعقارات لذلك اللجوء إلينا كأحد المتخصصين سيساعدك على فهم صياغات العقود وتجنب مخالفة أي من القوانين.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                
                <div class="info-blocks-in">
                    <h3>مراجعة وصياغة العقود</h3>
                    <p>مراجعة وصياغة العقود هي عمليات مهمة تتطلب دقة واهتماماً بالتفاصيل لضمان حماية حقوق الأطراف المعنية وتحديد التزاماتهم بشكل واضح وملزم.</p>
                </div>
            </div>
        </div>
		</section>
	</div>
	</section>
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>دليلك الامثل فى عالم العقارات</h2>
						<p>سواء كنت مستثمرًا عقاريًا محترفًا أم مبتدئًا، فإن الحصول على استشارة عقارية قوية يمكن أن يحد من المخاطر ويزيد من فرص النجاح.
							<br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
					</div>
				</div>
			</div>
			<div class="row">
			
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="{{URL::asset('site2/img/about.jpg')}}" alt="About Images">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
					<h3>About Us</h3>
						<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
						<a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a>
					</div>
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
							<span>&copy; Bootstrap Template 2018 All right reserved. <a href="https://webthemez.com/tag/free" target="_blank">Free HTML Templates</a> by WebThemez.
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
<script src="{{URL::asset('site2/js/jquery.js')}}"></script>
<script src="{{URL::asset('site2/js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('site2/materialize/js/materialize.min.js')}}"></script>
<script src="{{URL::asset('site2/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('site2/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{URL::asset('site2/js/jquery.fancybox-media.js')}}"></script>  
<script src="{{URL::asset('site2/js/jquery.flexslider.js')}}"></script>
<script src="{{URL::asset('site2/js/animate.js')}}"></script>
<!-- Vendor Scripts -->
<script src="{{URL::asset('site2/js/modernizr.custom.js')}}"></script>
<script src="{{URL::asset('site2/js/jquery.isotope.min.js')}}"></script>
<script src="{{URL::asset('site2/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('site2/js/animate.js')}}"></script> 
<script src="{{URL::asset('site2/js/custom.js')}}"></script>
</body>
</html>
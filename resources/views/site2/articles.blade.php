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
				{{-- <div class="col-sm-9">
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
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><i class="icon-info-blocks material-icons">IMMO</i>GLOBAL</a>
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
	</header><!-- end header -->
	<section id="inner-headline" style="text-align: rtl;direction: rtl;">
	<div class="container" style="text-align: rtl;">
	
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">بحوث في القانون العقاري</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content" style="direction: rtl">
<section id="pricing" style="text-align: rtl;">
        <div class="container" >
           <div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>بحوث في القانون  <span class="color">العقاري</span></h3>
									<p>يشمل القضاء العقاري كلّ محكمة أو هيئة حكميّة ذات نظر أصلي أو عرضي في مسائل عقاريّة. فمن المحاكم ذات النظّر الأصلي نذكر المحكمة العقاريّة، ومن المحاكم الأخرى نذكر مثلا المحكمة الابتدائية التي تنظر في الدّعاوى الإستحقاقيّة العقاريّة من ضمن اختصاصها العامّ، والمحكمة الإداريّة فيما يتعلّق بالملك العمومي والإنتزاع للمصلحة العموميّة...
										وفي هذا المعنى، لا يوجد أي تميّز للقضاء العقاري نظرا لعموم المعيار وضبابيّته: فكون النّزاع حول عقار لا يغر ي شيئا من الوظيفة القضائيّة وتطبيق القانون ممّا لو كان النزّاع حول منقول. كما أنّه بهذا المعيار، لا يمكن حصر النزّاعات العقاريّة أبدا. ولذلك لابدّ من فهم محدّد للقضاء العقاري بما يقتضي تضييق المفهوم.</p>
								</div>  
							</div>
						</div>
            <div class="row"> 
			<div class="col-md-4 menuItem" style="direction: rtl">     
                                 <ul class="menu">
                                <li>                                    بحوث قانونية

									 </li>
									 @foreach (DB::table('articles')->get() as $po)
										
									
									 <li>
										
                                    <div class="detail"><a href="{{url('/article')}}/{{$po->id}}"  class="price">{{$po->title}}</a></div>
									 </li>
									  @endforeach
								<li>
								<a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a></li>
								<li></li>
                            </ul>
                        </div>
						<div class="col-md-4 menuItem" style="direction: rtl">     
                            <ul class="menu">
                                <li>                                    مقالات قانونية

									 </li><li>
                                    <div class="detail"><span class="price">دور القضاء في مشطرة التحفيظ العقاري من خلال اجتهادات المجلس الاعلى</span></div>
									 </li><li>
									 <div class="detail"><span class="price">استرجاع حيازة المحلات المغلقة  والمهجورة ومسطرته </span></div>
									 </li><li>
                                    <div class="detail"><span class="price">الشفعة كسبب مشروع للملكية </span></div>
									</li><li>
                                    <div class="detail"><span class="price">آثار التقييد الاحتياطي على طلب الشفعة في عقار محفظ </span></div>
									</li><li>
                                    <div class="detail"><span class="price">الضريبة على الارباح العقاري ونزع الملكية </span></div>
									</li><li>
                                    <div class="detail"><span class="price">مسؤولية محافظ الملكية العقارية </span></div>
                                </li> 
								<li>
								<a href="#" class="btn btn-primary waves-effect waves-dark">أكثر</a></li>
								<li></li>
                            </ul>
                        </div>
						<div class="col-md-4 menuItem" style="direction: rtl">  
                                 <ul class="menu">
                                <li>
                                    نصوص قانونية
									 </li><li>
										<div class="detail"><span class="price">دور القضاء في مشطرة التحفيظ العقاري من خلال اجتهادات المجلس الاعلى</span></div>
									</li><li>
									<div class="detail"><span class="price">استرجاع حيازة المحلات المغلقة  والمهجورة ومسطرته </span></div>
									</li><li>
								   <div class="detail"><span class="price">الشفعة كسبب مشروع للملكية </span></div>
								   </li><li>
								   <div class="detail"><span class="price">آثار التقييد الاحتياطي على طلب الشفعة في عقار محفظ </span></div>
								   </li><li>
								   <div class="detail"><span class="price">الضريبة على الارباح العقاري ونزع الملكية </span></div>
								   </li><li>
								   <div class="detail"><span class="price">مسؤولية محافظ الملكية العقارية </span></div>
							   </li> 
							   <li>
							   <a href="#" class="btn btn-primary waves-effect waves-dark">أكثر</a></li>
								<li></li>
                            </ul>
                        </div>
			</div>
        </div>
    </section>
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
</body>
</html>
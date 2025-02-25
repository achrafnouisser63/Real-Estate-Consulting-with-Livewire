

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>CONSULTATION</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Filses -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="site/assets/css/fontawesome.css">
    <link rel="stylesheet" href="site/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="site/assets/css/animated.css">
    <link rel="stylesheet" href="site/assets/css/owl.css">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body style=" direction: rtl;">


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4 >Immo <span style="-webkit-text-stroke: 1px #daa520">GLOBAL</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{url('/')}}" class="active" style="font-weight: bold;">الرئيسية</a></li>
              <li class="scroll-to-section"><a href="{{url('/publier')}}" style="font-weight: bold;">مقالات</a></li>
              {{-- <li class="scroll-to-section"><a href="#services">Earnings</a></li> --}}
             {{--  <li class="scroll-to-section"><a href="#portfolio">A</a></li> --}}
            {{--   <li class="scroll-to-section"><a href="#blog">Blog</a></li>  --}}
              <li class="scroll-to-section"><a href="#contact" style="font-weight: bold;">تواصل معنا</a></li> 
              @if (Route::has('login'))
              
                  @auth
                  <li class="scroll-to-section"><a href="{{ url('/dashboard') }}" style="font-weight: bold;">استشاراتي</a></li> 

                  @else
                      <li class="scroll-to-section"><a href="{{ route('login') }}" style="font-weight: bold;">تسجيل الذخول</a></li> 
                      
                  @endauth
              
          @endif
         


                         <li class="scroll-to-section"><div class="main-red-button"><a href="{{ url('/consultation') }}">تقديم استشارة</a></div></li> 

           
           
           
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>أول و اكبر موقع استشارات عقارية في المغرب</h6>
                <h2>كل <em>الإستشارات </em> العقارية <span>مجانية</span> </h2>
                <p>ماهي الاستشارات العقارية المجانية التي يمكنك أن تسأل عنها أو تستفسر عنها؟ يمكن لك أن تستفسر عن نوع العقار الذي تريد أن تقوم بشرائه أو استئجاره أو حتى استثماره وتسأل عن ملكيته ومتى تم بنائه وتشيده. الأوراق المطلوبة من أجل استكمال تثبيت الملكية في دائرة العقارات. السؤال عن الضرائب العقارية المفروضة على العقار.</p>
                <form id="search" action="#" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email"  autocomplete="on" >
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button"><a href="{{ url('/consultation') }}">استشر</a></button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="site/assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="site/assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="site/assets/images/service-icon-01.png" alt="reporting">
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="site/assets/images/service-icon-02.png" alt="">
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="site/assets/images/service-icon-03.png" alt="">
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="site/assets/images/service-icon-04.png" alt="">
                  </div>
                  <div class="right-text">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="site/assets/images/services-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2><span>لماذا يجب عليك البحث عن </span><em>استشارات </em>, <span>عقارية قانونية؟</span></h2>
            <p>كل شخص يحلم بأن يمتلك عقار وهذا العقار هو الحلم الذي يطمح إليه الكثير من الناس وحتى تحصل على حلمك يتطلب منك عدة استشارات عقارية قانونية لكي تحقق الغاية المرجوة من هذا العقار وخاصة إذا أراد الشخص أن يستثمر هذا العقار فيتحتم عليه عدة إجراءات عقارية قانونية لذلك فهو بحاجة إلى شركة عقارية تلبي احتياجاته وتحقق هدفه من هذا الاستثمار كمجموعة محل العقارية إحدى الشركات العقارية المختصة في عقارات تركيا.</p>
          </div>
          {{-- <div class="row">
            <div class="col-lg-12" style=" direction: ltr;" >
              <div  class="first-bar progress-skill-bar">
                <h4 >آمن
                </h4>
                <span>100%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>ردود سريعة</h4>
                <span>88%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>The Health & The Money & Investment</h4>
                <span>94%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section" style=" direction: ltr;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2><em>ماهي الاستشارات العقارية </em> <span>المجانية؟</span><em></em></h2>
            <ul style=" direction: rtl;">
               <li style=" direction: ltr;">يمكن للزبون أن يستفسر عن نوع العقار الذي يريد أن يقوم بشرائه أو استئجاره أو حتى استثماره ويسأل عن ملكيته ومتى تم بنائه وتشيده.</li>
               <li style=" direction: rtl;">السؤال والنصائح حول هذا العقار
              </li>
               <li>لأوراق المطلوبة من أجل استكمال تثبيت الملكية في دائرة العقارات</li>
               <li>السؤال عن الضرائب العقارية المفروضة على العقار.
              </li>
               <li>كيفية نقل الملكية واستلام سند الملكية.
              </li>
              <li>كيفية ضمان حق البائع أو الشاري ودفع قيمة العقار بشكل سليم وقانوني.
              </li>

               <li>هل يمكن القيام ببيع العقار بعد تملكه وما هي قيمة الضرائب التي يمكن أن تفرض على العقار.
              </li>
              <li>ما هي أنواع الضرائب العقارية التي يمكن أن يدفعها المستثمر.
              </li>




            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2><em>Company</em> <span>investments</span> </h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="site/assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 1 Mar 2023</li>
                  <li><i class="fa fa-users"></i> +212633552211</li>
                  <li><i class="fa fa-folder"></i> BERRECHID</li>
                </ul>
                <a href="#"><h4>Our Next Meeting</h4></a>
                <p>Welcome to our members in this city. We will be with you for a better life</p>
                <div class="main-blue-button">
                  <a href="#">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 01 Mar 2023</span>
                  <a href="#"><h4>An investment in Education </h4></a>
                  <p>Investing in Education supports Economic growth. In order to increase Human Capital...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="site/assets/images/2.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 fev 2023</span>
                  <a href="#"><h4>Invest in real estate soon</h4></a>
                  <p>Morocco is experiencing urban development in all regions...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="site/assets/images/1.jpg" alt=""></a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2 style="text-align: center;">تواصل معنا مجانا.</h2>
            <p  style="text-align: center;"> أحصل على استشارات خبرائنا في المجال العقاري مجانا</p>
            <div  class="phone-info">
              <h4 style="text-align: center;">أو عبر الواتساب: <span><i class="fa fa-phone"></i> <a style="text-align: center;" href="#">+212612345678</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
         {{-- -------------------------------msg------------------ --}}
         @if (\Session::has('msg'))
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{!! \Session::get('msg') !!}.</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       @endif
       
         
         
         
         
          <form id="contact" action="send_message" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="First Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Last Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="site/assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2024 IMMO GLOBAL. 
          
          <br>IMMO GLOBAL  (2110 Casablanca/Berrechid)</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
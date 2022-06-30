<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W5LF7GKT2P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W5LF7GKT2P');
</script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jinna Gik">
		<meta name="description" content="Thuma is a women organization which derives from 2nd ASEAN Youth Social Journalism contest.It mainly focuses on skills and abilities of women who are having predicaments in their professional and educational fields.">
		<meta name="keywords" content="thuma future, women, youth, women-right, covid-19">
		<meta property="og:url"           content="{{ url()->current() }}" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="THUMA4FUTURE" />
		<meta property="og:description"   content="Thuma is a women organization which derives from 2nd ASEAN Youth Social Journalism contest.It mainly focuses on skills and abilities of women who are having predicaments in their professional and educational fields." />
		<meta property="og:image"         content="{{ asset('front-contents/assets/bg/bg1.jpg') }}" />

		<!-- favicon -->
		<link rel="shortcut icon" href="{{asset('assets/Logo/Logo_Update.png')}}">
		<link rel="apple-touch-icon" href="{{asset('assets/Logo/Logo_Update.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/Logo/Logo_Update.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/Logo/Logo_Update.png')}}">

		<title>THUMA4FUTURE</title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

		<!-- styles -->
		<link href="{{asset('front-contents/assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('front-contents/assets/css/style.css')}}" rel="stylesheet" type="text/css">
  
	</head>
	<body class="preloader cursor-anim-enable dark-nav">
		<div id="fb-root"></div>
		{{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v11.0" nonce="VaMoWC3Y"></script> --}}
		<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v3.0";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- preloader-loading start -->
		<div class="preloader__logoload-box">
			<img class="preloader__logo vertical" src="{{asset('assets/Logo/Logo_Update_02.png')}}" alt="logo">
			<div class="preloader__pulse"></div>
		</div><!-- preloader-loading end -->

		<!-- pointer start -->
		<div class="pointer js-pointer" id="js-pointer">
			<i class="pointer__inner fas fa-long-arrow-alt-right"></i>
			<i class="pointer__inner fas fa-search"></i>
			<i class="pointer__inner fas fa-link"></i>
		</div><!-- pointer end -->

		<!-- to top btn start -->
		<a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a><!-- to top btn end -->

		<!-- scroll down btn start -->
		<a href="#down" class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a><!-- scroll down btn end -->

		<!-- header start -->
		<header class="fixed-header">
			<!-- logo start -->
			<div class="header-logo vertical js-midnight-color js-headroom">
				<div class="hidden-box">
					<a href="{{ url('/') }}" class="header-logo__box js-pointer-large js-animsition-link">
                        <img class="header-logo__img white" src="{{asset('assets/Logo/logo-white-vertical.png')}}" alt="logo">
                        <img class="header-logo__img black" src="{{asset('assets/Logo/logo-black-vertical.png')}}" alt="logo">
                        
					</a>
				</div>
			</div><!-- logo end -->

			<!-- menu-icon start -->
			<div class="menu-icon vertical js-menu-open-close js-pointer-large js-midnight-color js-headroom">
				<div class="menu-icon__box">
					<span class="menu-icon__inner"></span>
					<span class="menu-icon__close"></span>
				</div>
			</div><!-- menu-icon end -->

			<!-- header-contact start -->
			<div class="header-contact js-midnight-color">
				<div class="header-contact__flex">
					<div class="header-contact__anim">
						<a href="#" class="header-contact__btn vertical-text center js-pointer-large">
							<span class="vertical-text__inner"><i class="far fa-comment-dots"></i> Get in touch</span>
						</a>
					</div>
				</div>
			</div><!-- header-contact end -->

			<!-- header-social start -->
			<div class="header-social after-preloader-anim js-midnight-color">
				<ul class="list list_center list_margin-20px hidden-box">
					<li class="list__item">
						<div class="hidden-box d-inline-block">
							<a href="#" class="anim-slide js-pointer-small">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
					</li>
					<li class="list__item">
						<div class="hidden-box d-inline-block">
							<a href="#" class="anim-slide tr-delay-02 js-pointer-small">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
					</li>
					<li class="list__item">
						<div class="hidden-box d-inline-block">
							<a href="#" class="anim-slide tr-delay-04 js-pointer-small">
								<i class="fab fa-instagram"></i>
							</a>
						</div>
					</li>
					<li class="list__item">
						<div class="hidden-box d-inline-block">
							<a href="#" class="anim-slide tr-delay-10 js-pointer-small">
								<i class="fab fa-youtube"></i>
							</a>
						</div>
					</li>
				</ul>
			</div><!-- header-social end -->
		</header><!-- header end -->

		<!-- navigation start -->
		<nav class="nav-container lines-section pos-rel js-dropdown-active-box">
			<!-- lines-container start -->
			<div class="lines-container pos-rel height-100perc">
				<!-- dropdown close btn start -->
				<div class="dropdown-close">
					<div class="dropdown-close__inner js-dropdown-close js-pointer-large">
						<span class="dropdown-close__arrow"></span>
					</div>
				</div><!-- dropdown close btn end -->

				<!-- js-nav-slider-bg start -->
				<div class="js-nav-slider-bg">
					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- swiper-slide start -->
						<div class="swiper-slide">
							<div class="nav-slide-bg" style="background-image:url({{asset('front-contents/assets/imag/revolt-BMest61rcqs-unsp')}})"></div>
							<div class="bg-overlay-black"></div>
						</div><!-- swiper-slide end -->
						<!-- swiper-slide start -->
						<div class="swiper-slide">
							<div class="nav-slide-bg" style="background-image:url({{asset('front-contents/assets/imag/revolt-164_6wVEHfI-unsp')}})"></div>
							<div class="bg-overlay-black"></div>
						</div><!-- swiper-slide end -->
						<!-- swiper-slide start -->
						<div class="swiper-slide">
							<div class="nav-slide-bg" style="background-image:url({{asset('front-contents/assets/imag/josh-nuttall-pIwu5XNvXp')}})"></div>
							<div class="bg-overlay-black"></div>
						</div><!-- swiper-slide end -->
						<!-- swiper-slide start -->
						<div class="swiper-slide">
							<div class="nav-slide-bg" style="background-image:url({{asset('front-contents/assets/imag/woman-in-black-sexy-top')}})"></div>
							<div class="bg-overlay-black"></div>
						</div><!-- swiper-slide end -->
						<!-- swiper-slide start -->
						<div class="swiper-slide">
							<div class="nav-slide-bg" style="background-image:url({{asset('front-contents/assets/imag/goashape-RvyJGaoaWrs-un')}})"></div>
							<div class="bg-overlay-black"></div>
						</div><!-- swiper-slide end -->
					</div><!-- swiper-wrapper end -->
				</div><!-- js-nav-slider-bg end -->

				<!-- menu-box start -->
				<ul class="menu-box">
                    <!-- nav-btn-box start -->
                    <li class="nav-btn-box js-dropdown-slider-open">
                        <a href="{{ url('/') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Home">Home</span>
                        </a>
                    </li><!-- nav-btn-box end -->
                    <!-- nav-btn-box start -->
					<li class="nav-btn-box">
						<a href="{{ url('/content') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Content">Content</span>
						</a>
                    </li><!-- nav-btn-box end -->
                    
                    <!-- nav-btn-box start -->
					<li class="nav-btn-box">
						<a href="{{ url('/#about') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="About Us">About Us</span>
						</a>
					</li><!-- nav-btn-box end -->
					<!-- nav-btn-box start -->
					<li class="nav-btn-box">
						<a href="#" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Memories">Memories</span>
						</a>
                    </li><!-- nav-btn-box end -->
					<!-- nav-btn-box start -->
					{{-- <li class="nav-btn-box">
						<a href="{{ url('/#down') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Contact">Contact</span>
						</a>
					</li><!-- nav-btn-box end --> --}}
				</ul><!-- menu-box end -->

				<!-- nav-information start -->
				<div class="nav-information">
					<!-- nav-email start -->
					<div>
						<div class="hidden-box d-inline-block">
							<div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email</div>
						</div>
						<div class="nav-fade-anim js-nav-anim margin-top-10">
							<a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">thuma4future@gmail.com</a><br>
	
						</div>
					</div><!-- nav-email end -->

					<!-- nav-address start -->
					{{-- <div>
						<div class="hidden-box d-inline-block">
							<div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Address</div>
						</div>
						<div class="nav-fade-anim js-nav-anim margin-top-10">
							<a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
								PO Box 223158 Oliver Street<br>
								East Victoria 2006 UK
							</a>
						</div>
					</div><!-- nav-address end --> --}}

					<!-- nav-phone start -->
					<div>
						<div class="hidden-box d-inline-block">
							<div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
						</div>
						<div class="nav-fade-anim js-nav-anim margin-top-10">
							<a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">09 42429 2242</a><br>
						</div>
					</div><!-- nav-phone end -->
				</div><!-- nav-information end -->

				<!-- nav-copyright start -->
				<div class="nav-copyright text-right">
					<p class="copyright-style nav-fade-anim js-nav-anim">
						&copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a>
					</p>
				</div><!-- nav-copyright end -->
			</div><!-- lines-container end -->
		</nav><!-- navigation end -->

		<!-- main start -->
		<main class="js-animsition-overlay" data-animsition-overlay="true">
			
		@yield('content')
		</main><!-- main end -->

		<!-- footer start -->
		<footer class="fixed-footer lines-section pos-rel bg-img-cover js-fixed-footer" style="background-image:url({{asset('front-contents/assets/bg/bg1.jpg')}})">
			<!-- bg-overlay -->
			<div class="bg-overlay-black"></div>
			<!-- lines-container start -->
			<div class="lines-container pos-rel no-lines flex-min-height-100vh">
				<!-- container start -->
				<div class="container padding-top-bottom-120">
					<!-- footer-logo start -->
					<div class="footer-logo vertical footer-logo-desktop-hidden padding-bottom-90">
						<img class="footer-logo__img" src="{{asset('assets/Logo/logo-white-vertical.png')}}" alt="logo">
					</div><!-- footer-logo end -->

					<!-- flex-container start -->
					<div class="flex-container flex-align-center">
						<!-- column start -->
						<div class="eight-columns">
							<h4 class="column-l-r-margin-10 headline-l footer-title">
								The <span class="text-color-red">Best<br>Organization</span> for<br>Thuma
							</h4>
						</div><!-- column end -->
						<!-- column start -->
						<div class="four-columns footer-nav-mobile-padding">
							<ul class="column-l-r-margin-10 footer-nav-list js-footer-hover-box">
								<li>
									<a href="{{ url('/') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Home</a>
								</li>
								<li>
									<a href="{{ url('/content') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">Content</a>
								</li>
								<li>
									<a href="{{ url('/#about') }}" class="footer-nav__btn js-pointer-small js-footer-hover-link">About Us</a>
								</li>
								<li>
									<a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Memories</a>
								</li>
								
							</ul>
						</div><!-- column end -->
					</div><!-- flex-container end -->

					<!-- flex-container start -->
					<div class="flex-container flex-justify-center padding-top-30">
						<!-- column start -->
						<div class="four-columns column-50-100 padding-top-60 footer-email">
							<div class="column-l-r-margin-10">
								<div class="headline-xxxxs">Email</div>
								<div class="margin-top-10">
									<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">thuma4future@gmail.com</a><br>
								</div>
							</div>
						</div><!-- column end -->
						<!-- column start -->
						<div class="four-columns column-50-100 padding-top-60 footer-phone">
							<div class="column-l-r-margin-10">
								<div class="headline-xxxxs">Phone</div>
								<div class="margin-top-10">
									<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">09 42429 2242</a><br>
								</div>
							</div>
						</div><!-- column end -->
					</div><!-- flex-container end -->

					<!-- footer-social start -->
					<ul class="footer-social-desktop-hidden list list_center padding-top-90">
						<li class="list__item">
							<a href="#" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
						</li>
						<li class="list__item">
							<a href="#" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
						</li>
						<li class="list__item">
							<a href="#" class="flip-btn js-pointer-small" data-text="Youtube">Youtube</a>
						</li>
						<li class="list__item">
							<a href="#" class="flip-btn js-pointer-small" data-text="Twitter">Twitter</a>
						</li>
					</ul><!-- footer-social end -->

					<!-- footer-copyright start -->
					<div class="footer-copyright text-center pos-abs pos-bottom-center">
						<p class="copyright-style">
							&copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a>
						</p>
					</div><!-- footer-copyright end -->
				</div><!-- container end -->
			</div><!-- lines-container end -->
		</footer><!-- footer end -->

		<!-- scripts -->
		<script src="{{asset('front-contents/assets/js/plugins.js')}}"></script>
		<script src="{{asset('front-contents/assets/js/footer-reveal.js')}}"></script>
		<script src="{{asset('front-contents/assets/js/main.js')}}"></script>
		<script src="{{asset('front-contents/assets/js/footer-reveal_init.50.del')}}"></script>
	</body>

</html>
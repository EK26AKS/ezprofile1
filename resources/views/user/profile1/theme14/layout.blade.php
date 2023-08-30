<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Eventure Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
   
		<!-- main css -->
		<link rel="stylesheet" href="{{ asset('assets/front/css/profile/theme14/style.css') }}">
		<!--====== Responsive css ======-->
    	<link rel="stylesheet" href="{{ asset('assets/front/css/profile/theme14/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/front/css/profile/theme14/bootstrap.css') }}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active">
									<a href="{{ route('front.user.detail.view', getParam()) }}"
										class="nav-link @if (request()->routeIs('front.user.detail.view')) active @endif">{{ $keywords['Home'] ?? 'Home' }}</a>
								</li>
								<li class="nav-item active">
									<a href="{{ route('front.user.about', getParam()) }}"
										class="nav-link @if (request()->routeIs('front.user.about')) active @endif">{{ $keywords['About'] ?? 'About' }}</a>
								</li>
								@if (is_array($userPermissions) &&
										is_array($packagePermissions) &&
										in_array('Service', $userPermissions) &&
										in_array('Service', $packagePermissions))
									<li class="nav-item">
										<a href="{{ route('front.user.services', getParam()) }}"
											class="nav-link @if (request()->routeIs('front.user.services') || request()->routeIs('front.user.service.detail')) active @endif">{{ $keywords['Services'] ?? 'Services' }}</a>
									</li>
								@endif

						
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
										<li class="nav-item"><a class="nav-link" href="portfolio-details.html">Project Details</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> 

								@if (is_array($userPermissions) &&
                                    is_array($packagePermissions) &&
										in_array('Blog', $userPermissions) &&
										in_array('Blog', $packagePermissions))
									<li class="nav-item submenu dropdown">
										<a href="{{ route('front.user.blogs', getParam()) }}"
											class="nav-link @if (request()->routeIs('front.user.blogs') || request()->routeIs('front.user.blog.detail')) active @endif">{{ $keywords['Blog'] ?? 'Blogs' }}</a>
										<ul class="dropdown-menu">
											<li class="nav-item"><a href="{{ route('front.user.blogs', getParam()) }}"
												class="nav-link @if (request()->routeIs('front.user.blogs') || request()->routeIs('front.user.blog.detail')) active @endif">{{ $keywords['Blog'] ?? 'Blogs' }}</li>																																					
										</ul>
									</li>
								@endif
								
								@if (is_array($userPermissions) && in_array('Contact', $userPermissions))
								<li class="nav-item @if (request()->routeIs('front.user.contact')) active @endif">
									<a href="{{ route('front.user.contact', getParam()) }}"
										class="nav-link">{{ $keywords['Contact'] ?? 'Contact' }}</a>
								</li>
								@endif
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
                 
        <!--================Footer Area =================-->
		<footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-sm-3 col-md-3 col-lg-3">
                        <p class="about-me-para">Stay Connected</p>
                        <p class="section-head">Margi@ektasi.io</p>                                               
                    </div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
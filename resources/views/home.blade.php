<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('images/favicon-192x192.png') }}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon-180x180.png') }}" />


	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">

    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    {{-- <link rel="stylesheet" href="http://idangero.us/swiper/dist/css/swiper.min.css"> --}}


	<link rel="stylesheet" href="{{ asset('css/wis.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testimonial-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <title>WIS</title>
  </head>
  <body>
<div class="main-body">

<section class="wrapper-header">
	@include('partials.navbar')
</section>

<section class="banner-section" style="background-image: url({{ asset('images/slider/img5-large.jpg') }});">
	{{-- <picture>
		<source media="(max-width: 799px)" srcset="{{ asset('images/slider/1.jpg') }}">
		<source media="(max-width: 800px)" srcset="{{ asset('images/slider/img5-large.jpg') }}">
		<img src="{{ asset('images/slider/img5-large.jpg') }}" class="img-fluid" alt="banner-image">
	</picture> --}}


	<div class="info">
		<div class="inner">

				<div id='slider' class='swipe'>
				  <div class='swipe-wrap'>
				    <div>
						<h3>Simply swipe on any device!</h3>
						<p>Use this buttons or your fingers. No matter what you do, no matter which device you choose, the picture will swipe and swipe again!</p>
				    </div>
				    <div>
						<h3>Simply swipe on any device!</h3>
						<p>Use this buttons or your fingers. No matter what you do, no matter which device you choose, the picture will swipe and swipe again!</p>
				    </div>
				    <div>
						<h3>Simply swipe on any device!</h3>
						<p>Use this buttons or your fingers. No matter what you do, no matter which device you choose, the picture will swipe and swipe again!</p>
				    </div>
				  </div>
				</div>

		</div>
		<div class="buttons">
			<button class="btn-prev">&larr;</button>
			<button class="btn-next">&rarr;</button>
		</div>
	</div>
	

</section>


<section class="common-links" style="background-color: #E4EEF2;">
	<div class="row">

		<div class="col-md-10 mx-auto p-0">
			<div class="owl-carousel owl-theme pt-sm-3">
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-ticket-alt"></i><br><br>
						ARTSUW
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-map-marker-alt"></i><br><br>
						MAPS
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-cogs"></i><br><br>
						MYUW
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-trophy"></i><br><br>
						ATHLETICS
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-share-square"></i><br><br>
						SOCIAL
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-book-open"></i><br><br>
						LIBRARIES
					</a>
			    </div>
			    <div class="item text-center">
			    	<a class="nav-link" href="#">
						<i class="fas fa-2x fa-user-md"></i><br><br>
						UW MEDICINE
					</a>
			    </div>
			</div>

{{-- 			<ul class="nav d-flex flex-nowrap bg-white p-4 justify-content-between" style="margin-top: -30px;">
				
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-ticket-alt"></i><br><br>
						ARTSUW
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-map-marker-alt"></i><br><br>
						MAPS
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-cogs"></i><br><br>
						MYUW
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-trophy"></i><br><br>
						ATHLETICS
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-share-square"></i><br><br>
						SOCIAL
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-book-open"></i><br><br>
						LIBRARIES
					</a>
				</li>
				<li class="nav-item text-center">
					<a class="nav-link" href="#">
						<i class="fas fa-2x fa-user-md"></i><br><br>
						UW MEDICINE
					</a>
				</li>

			</ul>  
 --}}			
		</div>
	</div>
</section>

<section class="news-and-event-section py-0 py-sm-2 px-md-5 " style="background-image: url({{ asset('images/MUN-Slider.jpg')  }}); ">
		<h4 class="text-center font-weight-bolder mb-4 text-white pt-3 pt-sm-4 pt-md-5">News and Events</h4>
		{{-- <div class="seperator-line seperator-middle mb-5 mb-sm-3 mt-sm-2 mt-4"></div> --}}
		<div class="d-inline-flex justify-content-around pb-5 flex-wrap flex-md-nowrap">	
			<div class="card shadow-lg mx-sm-1 mx-sm-3 mx-lg-5 rounded-0">
				<img class="card-img-top rounded-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4qq4SuQlfbIIGU0FtHXb2tpVtm-C2-zfbbZ0OS7cJrqg29dR2" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a href="#" class="btn rounded-0 btn-read-more float-right">Read More</a>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card shadow-lg mx-sm-1 mx-sm-3 mx-lg-5 rounded-0">
				<img class="card-img-top rounded-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4qq4SuQlfbIIGU0FtHXb2tpVtm-C2-zfbbZ0OS7cJrqg29dR2" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a href="#" class="btn rounded-0 btn-read-more float-right">Read More</a>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card shadow-lg mx-sm-1 mx-sm-3 mx-lg-5 rounded-0">
				<img class="card-img-top rounded-0" style="width: 100%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4qq4SuQlfbIIGU0FtHXb2tpVtm-C2-zfbbZ0OS7cJrqg29dR2" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a href="#" class="btn rounded-0 btn-read-more float-right">Read More</a>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
</section>

<section id="testim" class="testim">
{{-- 	<div class="container pt-5">
		<div class="row d-flex flex-wrap justify-content-between">
			 --}}
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                        <h2>Mr. Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                        <h2>Lorem De Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                </div>

            </div>
<!--         </div> -->


			{{-- 
		</div>
	</div> --}}
</section>

<section class="contactUs px-sm-5 py-sm-5" style="background-image: url({{ asset('images/wis1-1.jpg') }}); background-size: cover; border-top: 5px solid #F6BB3D; color: #9B999A">
	<div class="row">
		
		<div class="col-md-8 mx-auto contact-form">
			<h3 class="text-center font-weight-bolder">CONTACT US</h3>

			<form class="needs-validation mt-5" novalidate>

				<div class="form-row">
					<div class="col">
						<label for="">First Name</label>
						<input type="text" class="form-control" placeholder="First name">
					</div>

					<div class="col">
						<label for="">Last Name</label>
						<input type="text" class="form-control" placeholder="Last name">
					</div>
				</div>

				<div class="form-row mt-2">
					<div class="col">

						<label for="">Email</label>
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="col">

						<label for="">Phone Number</label>
						<input type="text" class="form-control" placeholder="Phone Number">
					</div>
				</div>
				 

				<div class="form-row mt-2">
					<div class="col">
						<label for="">Message</label>
						<textarea class="form-control" placeholder="Message" rows="3"></textarea>
					</div>
				</div>
				
				<button class="btn btn-primary mt-4" type="submit">Submit</button>
			</form>
		</div>

		<div class="col-md-3 address">
			<img width="250" src="{{ asset('images/logo.png') }}" alt="">
			<br><br>
			<div class="d-inline-block">
				<div class="d-inline-block">
					<p style="color: #ECE7D8; font-size: 12px;">
						Fil-Am Hi-Way Friendship <br>
						Angeles City, Pampanga
							<br><br>
						Commitment To Excellence
							<br><br>
						Cambridge International Accredited 
					</p>
					<p class="mb-0" style="color: #ECE7D8;" >
						<i class="fas fa-phone"></i>&nbsp;
						<span style="font-size: 13px;">045-123-4567</span>
					</p>
					<p class="mb-0" style="color: #ECE7D8;" >
						<i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;  
						<span style="font-size: 13px;">09171234567</span>
					</p>
					<p style="color: #ECE7D8;" >
						<i class="fas fa-envelope"></i>&nbsp;  
						<span style="font-size: 13px;">registrar@westfields.edu.ph</span>
					</p>
				</div>
			</div>
		</div>
	
	</div>

	
</section>

<footer class="footer-section py-4" style="background-color: #661F99;">
	<div class="container">
		<div class="d-flex flex-wrap flex-row justify-content-between">
			
			<div class="social-links">
				<nav class="nav">
					    <div class="social__item">
					            <a target="_blank" href="https://facebook.com" class="social__icon--facebook"><i class="icon--facebook"></i></a>
					    </div>
						<div class="social__item">
					            <a target="_blank" href="https://twitter.com/matchboxhero10" class="social__icon--twitter"><i class="icon--twitter"></i></a>
					    </div>
					    <div class="social__item">
					            <a target="_blank" href="https://twitter.com/matchboxhero10" class="social__icon--youtube"><i class="fab fa-youtube"></i></a>
					    </div>
				</nav>
			</div>
			<div class="col mt-3">
				<small class="text-center d-block mx-auto text-white font-weight-bold">
					© 2018 westfields.edu.ph
				</small>
			</div>
		
		</div>
	</div>
</footer>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	<script>
					
			$('.owl-carousel').owlCarousel({
			    loop:false,
			    margin: 5,
			    nav:false,
			    responsive:{
			        0:{
			            items: 3
			        },
			        600: {
			            items: 4
			        },
			        1000: {
			        	items: 6
			        },
			        1200: {
			            items: 7
			        }
			    }
			})

	</script>

	<script>
		function checkWindow () {
			if( $(window).width() <= 992 ) {
				$('.transformative').addClass('mobile-view');
			} else {
				$('.transformative').removeClass('mobile-view');
			}
		}

		$(window).resize(checkWindow);
		$(document).ready(checkWindow);

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('#buttons a ').css({
				'opacity': 1
			});
		}

	</script>

	<script src="{{ asset('js/testimonial-slider.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/swipe/2.0.0/swipe.js"></script>

	<script>
		window.mySwipe = new Swipe(document.getElementById('slider'), {
		  startSlide: 0,
		  speed: 400,
		  auto: 5000,
		  continuous: true,
		  disableScroll: false,
		  stopPropagation: false,
		  // callback: function(index, elem) {},
		  // transitionEnd: function(index, elem) {}
		});

		$('.btn-next').on('click', function () {
			window.mySwipe.next();
		})
		$('.btn-prev').on('click', function () {
			window.mySwipe.prev();
		})
	</script>
  </body>
</html>
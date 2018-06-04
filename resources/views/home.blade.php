<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/wis.css') }}">
    <title>WIS</title>
  </head>
  <body>
<div class="main-body">

<section class="wrapper-header">
	@include('partials.navbar')
</section>

<section class="banner-section" style="min-height: 200px; height: 450px; position: relative; background-image: url({{ asset('images/slider/img5.jpg') }}); z-index: 0;">




	<div class="info">
		<div class="inner">
			<h3>Simply swipe on any device!</h3>
			<p>Use this buttons or your fingers. No matter what you do, no matter which device you choose, the picture will swipe and swipe again!</p>
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
			<ul class="nav d-flex flex-wrap bg-white p-4 justify-content-between" style="margin-top: -30px;">
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
		</div>
	</div>
</section>

<section class="news-and-event-section py-0 py-sm-2 px-md-5 " style="background-image: url({{ asset('images/MUN-Slider.jpg')  }}); ">
		<h4 class="text-center font-weight-bolder text-white pt-3 pt-sm-4 pt-md-5">News and Events</h4>
		<div class="seperator-line seperator-middle mb-5 mt-4"></div>
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

<section class="testimonial-section bg-white">
	<div class="container pt-5">
		<div class="row d-flex flex-wrap justify-content-between">
			<div class="col-md-4 pb-5">
				<h4 class="text-center mb-4">Students' Corner</h4>
				<div class="students_corner">
					
					<div class="container-fluid btn-bar p-0">
				    	<div id="buttons">
				    		<a href="javascript:void(0)" id="prev" href="#"><</a>
				    		<a href="javascript:void(0)" id="next" href="#" style="float: right;">></a> 
				    	</div>
				    </div>

					<div id="slides">
				        <ul>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span> I was literally BLOWN AWAY by Company A's work! They went above and beyond all of our expectations with design, usability. and branding, I will reccommend them to everyone I know!<class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase">
				                    	<span class="quote-marks">"</span>
				                    	I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail!
				                    	<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span>Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				        </ul>
		    		</div>
				</div>
			</div>
			<div class="col-md-4 pb-5">
				<h4 class="text-center mb-4">Testimonials</h4>
				<div class="testimonials">
					
					<div class="container-fluid btn-bar p-0">
				    	<div id="buttons">
				    		<a href="javascript:void(0)" id="prev" href="#"><</a>
				    		<a href="javascript:void(0)" id="next" href="#" style="float: right;">></a> 
				    	</div>
				    </div>

					<div id="slides">
				        <ul>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span> I was literally BLOWN AWAY by Company A's work! They went above and beyond all of our expectations with design, usability. and branding, I will reccommend them to everyone I know!<class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase">
				                    	<span class="quote-marks">"</span>
				                    	I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail!
				                    	<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span>Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				        </ul>
			    	</div>

			    	

				</div>
			</div>

			<div class="col-md-4 pb-5">
				<h4 class="text-center mb-4"">Did you know?</h4>
				<div class="did-you-know">
					
					<div class="container-fluid btn-bar p-0">
				    	<div id="buttons">
				    		<a href="javascript:void(0)" id="prev" href="#"><</a>
				    		<a href="javascript:void(0)" id="next" href="#" style="float: right;">></a> 
				    	</div>
				    </div>

					<div id="slides">
				        <ul>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span> I was literally BLOWN AWAY by Company A's work! They went above and beyond all of our expectations with design, usability. and branding, I will reccommend them to everyone I know!<class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase">
				                    	<span class="quote-marks">"</span>
				                    	I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail!
				                    	<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase"><span class="quote-marks">"</span>Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!<span class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="authorContainer">
				                    <footer class="blockquote-footer text-center">John Mathew Pring </footer>
				                </div>
				            </li>
				        </ul>
		    		</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="footer-section px-sm-5 pt-sm-5" style="background-image: url({{ asset('images/wis1-1.jpg') }}); background-size: cover">
	<div class="col-md-5">
		<img width="250" src="{{ asset('images/logo.png') }}" alt="">
		<p class="text-center font-weight-light text-white">
			FIL-AM HI-WAY FRIENDSHIP <br>
			ANGELES CITY, PAMPANGA <br><br>
			CAMBRIDGE INTERNATIONAL ACCREDITED <br><br>
			TELEPHONE: 045 1234567 <br>
			EMAIL: REGISTRAR@WESTFIELDS.EDU.PH <br>
			MOBILE: 0912345678
		</p>
	</div>
	<div class="clearfix"></div>
	<div class="container copryright py-3">
			<small class="text-center text-white font-weight-light text-uppercase">
				<footer>
					© 2018 westfields.edu.ph<br>
					Powered by <b>Tigernet Hosting and IT Services</b>
				</footer>
			</small>
		</p>
	</div>
</section>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	
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
	<script src="{{ asset('js/we-slider.js') }}"></script>
	<script>
		$(document).ready(function () {
			new initSlider('.students_corner', '.students_corner ul', '.students_corner .we-slide');
			new initSlider('.testimonials', '.testimonials ul', '.testimonials .we-slide');
			new initSlider('.did-you-know', '.did-you-know ul', '.testimonials .we-slide');
		});
	</script>
  </body>
</html>
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
				                    <p class="quote-phrase">I was literally BLOWN AWAY by Company A's work! They went above and beyond all of our expectations with design, usability. and branding, I will reccommend them to everyone I know!<class="quote-marks">"</span>

				                    </p>
				                </div>
				                <div class="d-flex flex-wrap offset-md-3 p-0 mt-2">
				                	<div>
				                		<img height="50" width="50" src="http://static3.uk.businessinsider.com/image/589a1765dd0895cb6e8b49f8-1200/.jpg" class="img-fluid" alt="">
				                	</div>
			                    	<div>
				                    	<footer class="blockquote-footer mt-3">John Mathew Pring </footer>
				                	</div>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase">
				                    	I could not stop staring! Company A's Web Solutions are by far the most elegant solutions, you can't beat their quality and attention to detail!
				                    </p>
				                </div>
				               <div class="d-flex flex-wrap offset-md-3 p-0 mt-2">
				                	<div>
				                		<img height="50" width="50" src="http://static3.uk.businessinsider.com/image/589a1765dd0895cb6e8b49f8-1200/.jpg" class="img-fluid" alt="">
				                	</div>
			                    	<div>
				                    	<footer class="blockquote-footer mt-3">John Mathew Pring </footer>
				                	</div>
				                </div>
				            </li>
				            <li class="we-slide">
				                <div class="quoteContainer">
				                    <p class="quote-phrase">Carl Fakeguy, was the most helpful designer I've ever hired. He listened to my ideas and advised against things that could negatively affect my CEO. Company A is by far the most generous and helpful company, 5/5!

				                    </p>
				                </div>
				                <div class="d-flex flex-wrap offset-md-3 p-0 mt-2">
				                	<div>
				                		<img height="50" width="50" src="http://static3.uk.businessinsider.com/image/589a1765dd0895cb6e8b49f8-1200/.jpg" class="img-fluid" alt="">
				                	</div>
			                    	<div>
				                    	<footer class="blockquote-footer mt-3">John Mathew Pring </footer>
				                	</div>
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
					<a class="nav-link active" href="#"><i class="fab fa-facebook-f"></i></a>
					<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
					<a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
				</nav>
			</div>
			<div class="mt-3 copyright">
				<small class="text-center d-block mx-auto text-white font-weight-light">
					© 2018 westfields.edu.ph | Powered by <b>Tigernet Hosting and IT Services</b>
				</small>
			</div>
		
		</div>
	</div>
</footer>
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
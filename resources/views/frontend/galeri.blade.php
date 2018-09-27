<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/video-js/video-js.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/courses.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/courses_responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<div>(+) 085721055509</div>
									</li>
									<li>
										<div>asleatherofficial@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<ul>
										<li><a href="{{ route('login') }}">Login</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<div class="logo_img"><img src="images/FB_IMG_15361098794607620.jpg" height="60" width="60" alt=""></div>
										<div class="logo_text">AS Leather</div>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="/">home</a></li>
									<li><a href="/about">about us</a></li>
									<li class="active"><a href="/galeri">Gallery</a></li>
									<li><a href="/berita">news</a></li>
									<li><a href="/kontak">contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="courses.html">Courses</a></li>
				<li class="menu_mm"><a href="instructors.html">Instructors</a></li>
				<li class="menu_mm"><a href="#">Events</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>(009) 35475 6688933 32</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/courses.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Gallery</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Gallery</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Choose your course</h2></div>
					<div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
				</div>
			</div>

			<!-- Course Search -->
			<div class="row">
				<div class="col">
					<div class="course_search">
						<form action="#" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
							<div><input type="text" class="course_input" placeholder="Course" required="required"></div>
							<div><input type="text" class="course_input" placeholder="Level" required="required"></div>
							<button class="course_button"><span>search course</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</form>
					</div>
				</div>
			</div>

			<!-- Featured Course -->
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0025.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$358</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0024.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">New</a></div>
								<div class="course_price ml-auto">Price: <span>$340</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mark Smith</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0003.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$324</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0012.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$356</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0001.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">New</a></div>
								<div class="course_price ml-auto">Price: <span>$357</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mark Smith</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0005.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$351</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0004.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$365</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0006.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">New</a></div>
								<div class="course_price ml-auto">Price: <span>$345</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mark Smith</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/as_leather_accessories-20180905-0018.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$325</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Leather</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Pagination -->
			<div class="row">
				<div class="col">
					<div class="courses_paginations">
						<ul>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- About -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-row align-items-end justify-content-start">
									<div class="logo_img"><img src="images/logo.png" alt=""></div>
									<div class="logo_text">learn</div>
								</div>
							</a>
						</div>
						<div class="footer_about_text">
							<p>Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Quick menu</div>
						<ul class="footer_list">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#">Facts</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul class="footer_list">
							<li><a href="courses.html">Courses</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="#">Teachers</a></li>
							<li><a href="#">Links</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Address:</div>
								<div class="footer_contact_line">1481 Creekside Lane Avila Beach, CA 93424</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Phone:</div>
								<div class="footer_contact_line">+53 345 7953 32453</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Email:</div>
								<div class="footer_contact_line">yourmail@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/easing/easing.js')}}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{ asset('js/courses.js')}}"></script>
</body>
</html>
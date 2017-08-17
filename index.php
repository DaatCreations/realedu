<?php
	/**
	 * Created by PhpStorm.
	 * User: davinderpal
	 * Date: 16/08/2017
	 * Time: 11:51
	 */
	?>
<!DOCTYPE html>
<html>
	<head>
		<?php wp_head();?>
	</head>
	<body>
		<header class="header-container container">
			<div class="row">
				<nav class="header-contact col-10">
					<ul>
						<li><i class="fa fa-phone d-inline"></i> (01)-23456789</li> <!--  Need to get telephone numnber
						dynamically -->
						<li><i class="fa fa-envelope d-inline"></i> example@domain.com</li>  <!--  Nedd to get email address
						dynamically -->
					</ul>
				</nav>
				<div class="login col-1">
					<button><i class="fa fa-lock"></i> Login</button>
				</div>
				<div class="search col-1">
					<form action="">
						<input type="search">
						<button><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="logo">
					<h1><a href=#>RealEDU</a></h1>
				</div>
				<nav class="site">
					<ul>
						<li><a href=#>Home</a></li>
						<li><a href=#>About</a></li>
						<li><a href=#>Events</a></li>
						<li><a href=#>Blog</a></li>
						<li><a href=#>Courses</a></li>
						<li><a href=#>Gallery</a></li>
						<li><a href=#>Contact</a></li>
						<li><a href=#>Shop</a></li>
						<li><a href=#><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="jumbotron">
			<h2 class="display-3">Education For a Better World</h2>
			<blockquote>Eduction For a Better World belongs to those who prepare for it today</blockquote>
			<button>Take a Tour</button>
			<button>Learn More</button>
		</div>

		<div class="course-search container">
			<input type="search" placeholder="Enter Your Keywords...">
			<select name="courses" id="course-selection">
				<option value="">Choose Course Category</option>
				<option value="">Business</option>
				<option value="">Science</option>
			</select>
			<button><i class="fa fa-search"></i> Search Your Course</button>
		</div>

		<div class="popular-course container">
			<div class="row">
				<h2>Popular Courses</h2>
				<article class="col-3">
					<img src="" alt="">
					<h3>Web Designing</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
				</article>
				<article class="col-3"><img src="" alt="">
					<h3>Web Development</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
				</article>
				<article class="col-3"><img src="" alt="">
					<h3>Management</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
				</article>
				<article class="col-3"><img src="" alt="">
					<h3>App Development</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
				</article>
			</div>
		</div>

		<div class="jumbotron">
			<h2 class="display-3">Why Connect to RealEDU</h2>
			<blockquote>It has survived not only five centuries, but also the leap into typesetting, remaining essentially
			            unchanged.</blockquote>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
			   standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
			   make a type specimen book.</p>
			<button>View More</button>
		</div>

		<section class="upcoming-events container-fluid">
			<div class="row">
				<div class="col-6 calendar">
					<h2>Upcoming Events</h2>
					<div class="calendar-picker container-fluid">
						<div class="event-summary col-4">
							<h3>11 Jun</h3>
							<h4>Wednesday</h4>
							<ul>
								<li>WordPress and the future of Internet</li>
								<li>How to be creative conference 2017</li>
								<li>Journey from start to conclusion</li>
							</ul>
							<button>View More</button>
						</div>
					</div>
				</div>

				<div class="col-6 image">
					<img src="" alt="">
				</div>
			</div>
		</section>

		<section class="register">
			<div class="container">
				<div class="row">
					<div class="col-6 col-push-1">
						<p class="row">Get Unlimited Access to Premium Courses Provided by RealEDU. <strong>Register Now</strong> 
						              for free</p>
						<div class="count-down-timer row"></div>
					</div>
					<div class="col-3 sign-up-form">
						<h3>Register Now</h3>
						<form action=#>
							<input type="text" placeholder="Name" class="row">
							<input type="text" placeholder="Phone" class="row">
							<input type="email" placeholder="Email" class="row">
							<input type="submit" value="Sign Up" class="row">
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="student-blog container">
			<div class="row">
				<article class="col-4"><img src="" alt="">
					<header>
						<h3>Eduma Summer Camp</h3>
						<h4 class="author"><i class="fa fa-user"></i> John Doe</h4>
						<time><i class="fa fa-calendar"></i> 15 May, 2017</time>
											</header>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						   industry's standard dummy took a galley.</p>
						<button>Read More<i class="fa fa-arrow-right"></i></button>
				</article>
				<article class="col-4"><img src="" alt="">
					<header>
						<h3>Eduma Summer Camp</h3>
						<h4 class="author"><i class="fa fa-user"></i> John Doe</h4>
						<time><i class="fa fa-calendar"></i> 15 May, 2017</time>
											</header>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						   industry's standard dummy took a galley.</p>
						<button>Read More<i class="fa fa-arrow-right"></i></button>
				</article>
				<article class="col-4"><img src="" alt="">
					<header>
						<h3>Eduma Summer Camp</h3>
						<h4 class="author"><i class="fa fa-user"></i> John Doe</h4>
						<time><i class="fa fa-calendar"></i> 15 May, 2017</time>
											</header>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						   industry's standard dummy took a galley.</p>
						<button>Read More<i class="fa fa-arrow-right"></i></button>
				</article>
			</div>
		</section>
	</body>
</html>

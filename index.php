<!--  Underscore index  -->

<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package realedu
	 */

	get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();
?>

<!--  Underscore index finished -->





<!-- Slider Area Start Here -->
<div class="slider-area">
	<div class="single-slider" style="background: url(images/slider/1.jpg);">
		<div class="slider-text">
			<h2 data-wow-delay="0.5s" class="wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">Better Education For a Better World</h2>
			<p data-wow-delay="0.6s" class="wow bounceIn center" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">“Better Education For a Better World belongs to those who prepare for it today”</p>
			<ul data-wow-delay="0.8s" class="wow bounceInDown center" style="visibility: visible; animation-delay: 0.8s; animation-name: bounceInDown;">
				<li><a href="courses.html">Take a tour</a></li>
				<li><a href="about.html">Learn More</a></li>
			</ul>
		</div>
	</div>
	<div class="single-slider" style="background: url(images/slider/3.jpg);">
		<div class="slider-text">
			<h2 data-wow-delay="0.5s" class="wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">Better Education For a Better World</h2>
			<p data-wow-delay="0.6s" class="wow bounceIn center" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">“Better Education For a Better World belongs to those who prepare for it today”</p>
			<ul data-wow-delay="0.8s" class="wow bounceInDown center" style="visibility: visible; animation-delay: 0.8s; animation-name: bounceInDown;">
				<li><a href="courses.html">Take a tour</a></li>
				<li><a href="about.html">Learn More</a></li>
			</ul>
		</div>
	</div>
	<div class="single-slider" style="background: url(images/slider/2.jpg);">
		<div class="slider-text">
			<h2 data-wow-delay="0.5s" class="wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">Better Education For a Better World</h2>
			<p data-wow-delay="0.6s" class="wow bounceIn center" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">“Better Education For a Better World belongs to those who prepare for it today”</p>
			<ul data-wow-delay="0.8s" class="wow bounceInDown center" style="visibility: visible; animation-delay: 0.8s; animation-name: bounceInDown;">
				<li><a href="courses.html">Take a tour</a></li>
				<li><a href="about.html">Learn More</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Slider Area End Here -->
<!-- Search Box Start Here -->
<div class="search-box-area">
	<div class="container">
		<div class="row">
			<div class="search-box">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="leave-comments-area">
						<form>
							<fieldset>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<input type="text" placeholder="Enter Your Keywords..">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<select>
											<option value="" selected="selected">Choose Cource Category..</option>
											<option value="">PHP Course</option>
											<option value="">Java Course</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<button class="btn-send" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search Youe Course</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Search Box End Here -->
<!-- Popular Courses Start Here -->
<div class="popular-course-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="section-title">
					<h2>Popular Courses</h2>
					<img src="images/title.png" alt="title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="single-course">
					<a href="single-course.html">
						<i class="flaticon-website-design-symbol"></i>
					</a>
					<h3><a href="single-course.html">Web Designing</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
					<div class="apply-button">
						<a href="single-course.html">Apply Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="single-course">
					<a href="single-course.html"><i class="flaticon-language"></i></a>
					<h3><a href="single-course.html">Web Development</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
					<div class="apply-button">
						<a href="single-course.html">Apply Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="single-course">
					<a href="single-course.html"><i class="flaticon-progress-report"></i></a>
					<h3><a href="single-course.html">Management</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
					<div class="apply-button">
						<a href="single-course.html">Apply Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="single-course">
					<a href="single-course.html"><i class="flaticon-mobile-app-developing"></i></a>
					<h3><a href="single-course.html">Apps Development</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
					<div class="apply-button">
						<a href="single-course.html">Apply Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="view-more">
					<a href="courses.html">View All Cources</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Popular Courses End Here -->
<!-- why connect us start Here -->
<div class="why-connect-us">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center"></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
				<div class="section-title">
					<h2>Why Connect to RealEDU ?</h2>
					<img src="images/title2.png" alt="title">
					<p>It has survived not only five centuries, but also the leap into
					   typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center"></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
				<div class="section-title">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center"></div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
				<div class="view-more">
					<a href="courses.html">View More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- why connect us end Here -->
<!-- Calender Area Start Here -->
<div class="calancer-area">
	<div class="container-fluid acurate">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
				<div class="calender-area">
					<div class="section-title">
						<h2>Popular Courses</h2>
						<img src="images/title.png" alt="title">
						<!-- calendar area start here -->
						<div class="calendar-area">
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
										<div class="single-calender">
											<div class="wrapper">
												<div class="calendar-body">
													<div class="row weekdays">
														<div class="col-xs-1"><p>Sun</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Mon</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Tue</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Wed</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Thu</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Fri</p></div><!-- end col-xs-1 -->
														<div class="col-xs-1"><p>Sat</p></div><!-- end col-xs-1 -->
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle white" aria-hidden="true"></i>28</p></a></div>
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle black" aria-hidden="true"></i>29</p></a></div>
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle black" aria-hidden="true"></i>30</p></a></div>
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle black" aria-hidden="true"></i>31</p></a></div>
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle black" aria-hidden="true"></i>1</p></a></div>
														<div class="col-xs-1"><a href="#"><p class="inactive"><i class="fa fa-circle black" aria-hidden="true"></i>2</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>1</p></a></div>
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>2</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>3</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>4</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>5</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>6</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>7</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>8</p></a></div>
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>9</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>10</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>11</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>12</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>13</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>14</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>15</p></a></div>
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>16</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>17</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>18</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>19</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>20</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>21</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>22</p></a></div>
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>23</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>24</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>25</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>26</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle violet" aria-hidden="true"></i>27</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>28</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle red" aria-hidden="true"></i>29</p></a></div>
													</div><!-- end row -->
													<div class="row dates">
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle black" aria-hidden="true"></i>30</p></a></div>
														<div class="col-xs-1"><a href="#"><p><i class="fa fa-circle white" aria-hidden="true"></i>31</p></a></div>
													</div><!-- end row -->
													<div class="line"></div>
												</div><!-- end calendar-body -->
											</div><!-- end wrapper -->

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- calendar area end here -->
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="calender-image">
					<img src="images/calender.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Calender Area End Here -->
<!-- Register Now Start Here -->
<div class="register-now-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="register-text">
					<p>Get Unlimited Access to Premium Courses Provided by RealEDU, <a href="#"><span>REGISTER NOW</span></a> for free</p>
					<img src="images/date.png" alt="">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="reservation-field">
					<h2>Register Now</h2>
					<form>
						<fieldset>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sngl-cnt-field">
									<input placeholder="Name" type="text" name="name">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sngl-cnt-field">
									<input placeholder="Phone" type="text" name="number">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sngl-cnt-field">
									<input placeholder="Email" type="text" name="email">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sngl-cnt-submitbtn">
									<button class="active-btn" type="submit">Sign Up</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Register Now End Here -->
<!-- Blog Area Start Here -->
<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="section-title">
					<h2>Student's Blog</h2>
					<img src="images/title.png" alt="title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single-blog">
					<a href="single-blog.html"><img src="images/blog/1.png" alt=""></a>
					<div class="blog-content">
						<h3><a href="single-blog.html">Eduma Summer Camp</a></h3>
						<div class="blog-info">
							<ul>
								<li><i class="fa fa-user" aria-hidden="true"></i> John Deo</li>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 15 May, 2015</li>
							</ul>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
						<a href="single-blog.html">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single-blog">
					<a href="single-blog.html"><img src="images/blog/2.png" alt=""></a>
					<div class="blog-content">
						<h3><a href="single-blog.html">Eduma Summer Camp</a></h3>
						<div class="blog-info">
							<ul>
								<li><i class="fa fa-user" aria-hidden="true"></i> John Deo</li>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 15 May, 2015</li>
							</ul>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
						<a href="single-blog.html">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single-blog">
					<a href="single-blog.html"><img src="images/blog/3.png" alt=""></a>
					<div class="blog-content">
						<h3><a href="single-blog.html">Eduma Summer Camp</a></h3>
						<div class="blog-info">
							<ul>
								<li><i class="fa fa-user" aria-hidden="true"></i> John Deo</li>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 15 May, 2015</li>
							</ul>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  took a galley. </p>
						<a href="single-blog.html">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Area End Here -->
<!-- Video Background Start Here -->
<div class="video-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="video-content">
					<h2>Take a Video Tour to RealEDU</h2>
					<img src="images/video-icon.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Video Background End Here -->
<!-- More Lecturer Area Start Here -->
<div class="lecturer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="section-title">
					<h2>Meet Skilled Lecturers</h2>
					<img src="images/title.png" alt="title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single-lecturer">
					<div class="image">
						<a href="#"><img src="images/lecturer/1.png" alt=""></a>
						<div class="overley">
							<div class="social-media">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="details">
						<h3><a href="#">John Deo</a></h3>
						<span>President</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single-lecturer">
					<div class="image">
						<a href="#"><img src="images/lecturer/2.png" alt=""></a>
						<div class="overley">
							<div class="social-media">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="details">
						<h3><a href="#">Donald Simpson</a></h3>
						<span>Lecturer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single-lecturer">
					<div class="image">
						<a href="#"><img src="images/lecturer/3.png" alt=""></a>
						<div class="overley">
							<div class="social-media">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="details">
						<h3><a href="#">Helene Powers</a></h3>
						<span>Lecturer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="single-lecturer">
					<div class="image">
						<a href="#"><img src="images/lecturer/4.png" alt=""></a>
						<div class="overley">
							<div class="social-media">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="details">
						<h3><a href="#">Janet Richmond</a></h3>
						<span>Lecturer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- More Lecturer Area End Here -->
<!-- Testimonial Area start here -->
<div class="home-page-testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="testimonial-area">
					<div class="single-testiminial">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam facere assumenda blanditiis distinctio illum. Nesciunt, nemo iure dolorem assumenda, quia incidunt repudiandae, distinctio sed consequuntur ab iusto nobis molestias. </p>
						<h3>Kevin Pereira</h3>
					</div>
					<div class="single-testiminial">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam facere assumenda blanditiis distinctio illum. Nesciunt, nemo iure dolorem assumenda, quia incidunt repudiandae, distinctio sed consequuntur ab iusto nobis molestias. </p>
						<h3>Brandon McConnell</h3>
					</div>
					<div class="single-testiminial text-center">
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam facere assumenda blanditiis distinctio illum. Nesciunt, nemo iure dolorem assumenda, quia incidunt repudiandae, distinctio sed consequuntur ab iusto nobis molestias.</p>
						<h3>Austin Brown</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial Area end here -->
<!-- Portfolio One Start Here -->
<div class="portfolio-one-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="section-title">
					<h2>Our Gallery</h2>
					<img src="images/title.png" alt="title">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-menu">
				<ul>
					<li class="filter" data-filter="all">All</li>
					<li class="filter" data-filter=".theme">Novel</li>
					<li class="filter" data-filter=".plugin">Poem</li>
					<li class="filter" data-filter=".template">History Book</li>
					<li class="filter" data-filter=".html">English Book</li>
					<li class="filter" data-filter=".graphics">Story Book</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
				<div id="Container">
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix graphics">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/1.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix theme plugin html">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/2.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/2.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix template theme html">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/3.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/3.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix graphics plugin html">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/4.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/4.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix theme plugin template">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/5.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/5.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- single portfolio start -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix theme template html graphics">
						<div class="single-portfolio">
							<div class="portfolio-image">
								<a href="images/portfolio/6.jpg" data-lightbox="example-set" data-title="Image Title"><img src="images/portfolio/6.jpg" alt=""></a>
							</div>
							<div class="overley">
								<div class="portfolio-details">
									<h3> <a href="images/portfolio/1.jpg" data-lightbox="example-set" data-title="Image Title">Gallery Title</a></h3>
									<ul>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
										<li><a href="images/gellary/1.jpg" data-lightbox="example-set" data-title="Image Title"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									</ul>

								</div>
								<div class="photo-informations">
									<ul>
										<li><i class="fa fa-thumbs-up" aria-hidden="true"></i> 125</li>
										<li><i class="fa fa-comments-o" aria-hidden="true"></i> 2</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio One End Here -->
<!-- Subscribe Area Start Here -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="subscribe-area">
				<h3>Subscribe to Our Newsletter</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
				<form>
					<fieldset>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="sngl-cnt-field">
								<label><i class="fa fa-paper-plane" aria-hidden="true"></i></label>
								<input placeholder="Enter Your Mail" type="text">
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Subscribe Area End Here -->
<!-- Footer Area Start Here -->
<footer>
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="single-footer">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at purus varius odio tempus cursus. vitae, commodo dui. </p>
						<div class="social-media">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="single-footer">
						<h2>Quicks Links</h2>
						<div class="quick-links">
							<ul>
								<li><a href="about.html">About</a></li>
								<li><a href="our-services.html">Services</a></li>
								<li><a href="our-works1.html">Portfolio</a></li>
								<li><a href="blog.html">Blogs</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="single-footer">
						<h2>Recent Post</h2>
						<div class="single-post">
							<div class="media">
								<a class="pull-left" href="#">
									<img src="images/blog/4.jpg" alt="">
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Ut venenatis, Commodo ligula</a></h4>
									<p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
								</div>
							</div>
						</div>
						<div class="single-post">
							<div class="media">
								<a class="pull-left" href="#">
									<img src="images/blog/5.jpg" alt="">
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Ut venenatis, Commodo ligula</a></h4>
									<p>Lorem ipsum dolor sit amet, adipiscing elit....</p>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="single-footer">
						<h2>Contact Info</h2>
						<div class="contact-info">
							<ul>
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> 195 Cooks Road,New York, USA</li>
								<li><i class="fa fa-envelope-o" aria-hidden="true"></i> support@realedu.com</li>
								<li><i class="fa fa-phone" aria-hidden="true"></i> +49 30 47373795</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<div class="footer-bottom">
						<div class="logo-area">
							<a href="index.html"><span>Real</span>edu</a>
						</div>
						<p>&copy;  2017 Realedu Designed by <span>daatcreations</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Area End Here -->
<!-- all js here -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- jquery-ui js -->
<script src="js/jquery-ui.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- jquery light box -->
<script src="js/lightbox.min.js"></script>
<!-- jquery.fancybox.pack js -->
<script src="inc/fancybox/jquery.fancybox.pack.js"></script>
<!-- jQuery MixedIT Up -->
<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>

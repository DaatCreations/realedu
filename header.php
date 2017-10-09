<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realedu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--
<!--<header>-->
<!--	<div class="header-top-area">-->
<!--		<div class="container">-->
<!--			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">-->
<!--				<div class="header-top-left">-->
<!--					<nav>-->
<!--						<ul>-->
<!--							<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  (01)-23456789 </a></li>-->
<!--							<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> example@yourdomain.com </a></li>-->
<!--							<li> Language:<span> English </span>-->
<!--								<ul>-->
<!--									<li><a href="#">English</a></li>-->
<!--									<li><a href="#">Hindi</a></li>-->
<!--									<li><a href="#">Aribic</a></li>-->
<!--									<li><a href="#">Bangla</a></li>-->
<!--								</ul>-->
<!--								<i class="fa fa-caret-down" aria-hidden="true"></i>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</nav>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 acurate">-->
<!--				<div class="header-top-right">-->
<!--					<nav>-->
<!--						<ul>-->
<!--							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--							<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>-->
<!--							<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>-->
<!--							<li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--						</ul>-->
<!--					</nav>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="header-area sticky">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">-->
<!--					<div class="logo-area">-->
<!--						<a href="index.html">-->
<!--							<img src="images/logo.png" alt="logo">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">-->
<!--					<div class="main-menu">-->
<!--						<ul>-->
<!--							<li class="active"><a href="index.html">Home</a></li>-->
<!--							<li><a href="about.html">About</a></li>-->
<!--							<li><a href="events.html">Events</a>-->
<!--								<ul>-->
<!--									<li>-->
<!--										<a href="single-event.html">Single Event</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="blog.html">Blog</a>-->
<!--								<ul>-->
<!--									<li>-->
<!--										<a href="single-blog.html">Single Blog</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="courses.html">Courses</a>-->
<!--								<ul>-->
<!--									<li>-->
<!--										<a href="single-course.html">Single Course</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="gallery.html">Gallery</a></li>-->
<!--							<li><a href="shop.html">Shop</a>-->
<!--								<ul>-->
<!--									<li><a href="single-product.html">Single Product</a></li>-->
<!--									<li><a href="cart.html">Cart Page</a></li>-->
<!--									<li><a href="checkout.html">Checkout Page</a></li>-->
<!--									<li><a href="login.html">Login Page</a></li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="contact.html">Contact</a></li>-->
<!--							<li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="mobile-menu-area">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12">-->
<!--					<div class="mobile-menu">-->
<!--						<nav id="dropdown">-->
<!--							<ul>-->
<!--								<li><a href="index.html">Home</a></li>-->
<!--								<li><a href="about.html">About</a></li>-->
<!--								<li><a href="events.html">Events</a>-->
<!--									<ul>-->
<!--										<li>-->
<!--											<a href="single-event.html">Single Event</a>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li><a href="blog.html">Blog</a>-->
<!--									<ul>-->
<!--										<li>-->
<!--											<a href="single-blog.html">Single Blog</a>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li><a href="courses.html">Courses</a>-->
<!--									<ul>-->
<!--										<li>-->
<!--											<a href="single-course.html">Single Course</a>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li><a href="gallery.html">Gallery</a></li>-->
<!--								<li><a href="shop.html">Shop</a>-->
<!--									<ul>-->
<!--										<li><a href="single-product.html">Single Product</a></li>-->
<!--										<li><a href="cart.html">Cart Page</a></li>-->
<!--										<li><a href="checkout.html">Checkout Page</a></li>-->
<!--										<li><a href="login.html">Login Page</a></li>-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li><a href="contact.html">Contact</a></li>-->
<!--								<li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>-->
<!--							</ul>-->
<!--						</nav>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</header>-->
<!-- Header Area End Here -->



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'realedu' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'realedu' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

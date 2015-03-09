<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Stacks
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src="//use.typekit.net/lrz4jyi.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script>
      $(document).ready(function() {
      $('body').addClass('js');
      var $menu = $('.menu'),
        $menulink = $('#nav-icon');
      
    $menulink.click(function() {
      $menu.toggleClass('active'),
      $menulink.toggleClass('active');

      return false;
    });});
  </script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<header id="masthead" class="site-header" role="banner">

		<div class="header-info">
			<div class="container">
			<small><p><i class="fa fa-phone"></i>  <a href="tel:8476780433">847-678-0433</a> &nbsp; <i class="fa fa-location-arrow"></i>  <address><a href="https://www.google.com/maps/place/4200+Old+River+Rd,+Schiller+Park,+IL+60176/@41.9573591,-87.8652633,17z/data=!4m2!3m1!1s0x880fb58c6a16002f:0xc17e51812eadce0d">4200 Old River Rd. Schiller Park, Il 60176</a></address> &nbsp; <i class="fa fa-clock-o"></i>  Mon-Thr: 9am-9pm, Fri-Sat: 9am-5pm</p> </small>
		</div>
		</div>			

	<div class="container grid">
			<div class="col-1-2">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-1-2">
			<div class="logins text-right">
	      		<a href="https://catalog.swanlibraries.net/patroninfo"><i class="fa fa-users"></i> Library Card Login</a>
	      		<a href="https://mediaondemand.libraryreserve.com/10/50/en/SignIn2.htm?branchid=828&URL=MyAccount.htm%3fPerPage%3d40"> <i class="fa fa-book"></i> Media On Demand</a>
	      	</div>
			<form class="swan-search form-inline" role="form" action="http://catalog.swanlibraries.net/search~S131/" method="post">

	        <div class="form-group">
	        <input type="hidden" name="searchscope" value="131">
	        <input type="hidden" name="SORT" value="D">
	        <input type="hidden" name="searchtype" value="X">
	        
	        <br>

	        
	      	<div class="row collapse postfix-round">
	        		<div class="small-11 columns">
	        			<input type="text" id="searchcatalog" class="form-control" placeholder="Search Catalog..." name="searcharg">
	        		</div>
	        		<div class="small-1 columns">
	        			<button type="submit" class="button postfix">Go</button>
	    			</div>
	    	</div>
	    	</div>

	      </form>
	  		</div>
	  	</div>

	  	<div class="container">

	  		<div id="nav-icon" class="menu-link">
			<div class="one"></div>
			<div class="two"></div>
			<div class="three"></div>
			</div>
			
			<nav id="primary-nav" class="menu main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'false' ) ); ?>
			</nav><!-- #site-navigation -->
			
		</div>
	</header><!-- #masthead -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Stacks
 */
?>

	</div><!-- .container -->
</div><!-- .wrapper -->


	<div class="newsletter">
		<div class="container grid">
		<div class="col-1-2">
			<h3 class="text-center">Sign Up For Our Newsletter</h3>
		</div>
			 	<div class="col-1-2 row collapse postfix-round">
					<form action="//schillerparklibrary.us10.list-manage.com/subscribe/post?u=a9ff15e763c38f488d1fed642&amp;id=ef2e643b46" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	        		<div style="padding-right: 0;" class="small-9 columns">
	        			<input type="email" value="" name="EMAIL" id="mce-EMAIL" class="form-control" placeholder=" Email Address">
	        		</div>
	        		<div style="padding-left: 0;" class="small-3 columns">
	        			 <div style="position: absolute; left: -5000px;"><input type="text" name="b_a9ff15e763c38f488d1fed642_ef2e643b46" tabindex="-1" value=""></div>
	        			<input type="submit" value="Subscribe" id="mce-embedded-subscribe" class="button postfix"></input>
	    			</div>
	    			</form>
	    			<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	    		</div>
	    	</div>
	   </div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container grid">
		<div class="col-1-2">
			<div>
				<h2>Schiller Park Public Library</h2>
				<p><i class="fa fa-phone"></i>  <a href="tel:8476780433">847-678-0433</a> <br><br> <i class="fa fa-location-arrow"></i> <a href="https://www.google.com/maps/place/4200+Old+River+Rd,+Schiller+Park,+IL+60176/@41.9573591,-87.8652633,17z/data=!4m2!3m1!1s0x880fb58c6a16002f:0xc17e51812eadce0d">4200 Old River Rd. Schiller Park, Il 60176</a> <br><br> <i class="fa fa-clock-o"></i>  Mon-Thr: 9am-9pm, Fri-Sat: 9am-5pm</p>
			</div>
			<div class="social-media">
		      		<a class="button round tiny twitter-btn" href="http://twitter.com/spplibrary"><i class="fa fa-twitter"></i>  <small>TWITTER</small></a>
		      		<a class="button round tiny facebook-btn" href="http://facebook.com/SchillerParkPublicLibrary"><i class="fa fa-facebook"></i>  <small>FACEBOOK</small></a>
		     </div>
		</div>
		<div class="col-1-2">
			<h2>Links:</h2>
		<nav class="site-map" >
			<?php wp_nav_menu( array( 'menu' => 'footer', 'container' => 'false' ) ); ?>
		</nav><!-- .site-map -->
		</div>
		
	</div> <!-- .container -->
	<div class="copyright text-center">
		<p>© Schiller Park Public Library - <a href="http://villageofschillerpark.com">The Village of Schiller Park</a></p>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

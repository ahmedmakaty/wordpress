<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
?>



<?php do_action( 'mfn_hook_content_after' ); ?>

</div>


         	<!-- semifooter -->
<div class="container-fluid" id="semifooter" >
	<div class="row">
	<!--  -->
		<div class="col-lg-3 col-lg-offset-1">
			<h3>EL MASSALLA</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<!--  -->
		<div class="col-lg-4">
			<h3>ADDRESS</h3>

		</div>
		<!--  -->
		<div class="col-lg-3">
			<h3>CONTACT US</h3>
			<?php echo do_shortcode('[contact-form-7 id="91" title="Untitled"]'); ?>
		</div>
		<!--  -->
	</div>
	</div>
	<!-- end of semi footer -->
	<div class="container-fluid">
	<div class="row" id="footer">
		<!-- 1 -->
		<div class="col-xs-4 col-xs-offset-1">
			
		</div>
		<!-- 2 -->
		<div class="col-xs-4 col-xs-offset-2">
			
		</div>
		<!-- 1 -->
	</div>
    </div><!-- end of container-fluid -->

    
     <!-- end of inner -->
        
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
			
$(function() { //on DOM ready
		$("#scroller").simplyScroll({
        	auto: true,
			speed: 1
		});
	});
			$("img.lazy").lazyload({
			effect :"slideDown"

  		  });
        //     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        //     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        //     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        //     e.src='//www.google-analytics.com/analytics.js';
        //     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        //     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
         </script>

<?php do_action( 'mfn_hook_bottom' ); ?>
	
<!-- wp_footer() -->
<?php wp_footer(); ?>

</body>
</html>
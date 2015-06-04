</div>


<section class="footer " >
  <div class="container-fluid">
    <div class="row ">
      <div class=" col-md-3  ">
        <h5 class="FS">
          <?php bloginfo('name');?>

        </h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
        </p>
      </div>
      <div class="col-md-2">
        <h5 class="FS">
          Address
        </h5>
        <ul>
         <li>
           <p>phone</p>
           <p>email</p>
           <p>Address</p>
         </li>
       </ul>  
     </div>
     <div class="row no-guitter">
     <div  class="col-md-5">
      <div class="wow bounceInRight clearfix">
        <div class="contactBg clearfix">
          <div class="ContactPadding clearfix">
        <h2> Contact Us</h2>


          <?php echo do_shortcode('[contact-form-7 id="91" title="Untitled"]');?>
       </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</section>
</div> <!-- /container -->   


<script src="<?php print THEMEROOT;?>/js/vendor/jquery-1.11.2.min.js"></script>     
<script src="<?php print THEMEROOT;?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="<?php print THEMEROOT;?>/js/vendor/wow.min.js"></script>
<script src="<?php print THEMEROOT;?>/js/vendor/jquery.sticky.js"></script>
<script src="<?php print THEMEROOT;?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php print THEMEROOT;?>/js/main.js"></script>
<script src="<?php print THEMEROOT;?>/js/vendor/owlcarousel.min.js"></script>


<!-- wow intialization for animate.css -->
<script>
wow = new WOW(
{
  animateClass: 'animated',
  offset:       200,
}
);
wow.init();
</script>
<script type="text/javascript">
$(document).ready(function() {

  $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 3,
            itemsDesktop : [979,3],
            itemsDesktopSmall : [700,3]

          });
});
</script>






<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<?php wp_footer(); ?>
</body>
</html>

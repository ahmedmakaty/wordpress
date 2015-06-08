<?php
/****
Template Name: Arabic home Page
*/
?>

<?php get_header();?>




<div>
<?php putRevSlider( "slider" ) ?>
</div>

    <!-- content starts here --> 
  <div class="CS1">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row ">
        <div class="col-md-6 wow fadeInLeft">
          <img class="img-responsive" src="<?php print THEMEROOT;?>/img/Cimage.jpg" alt="el masalla main tools">
         <!--  <p><a class="btn btn-default" href="#" role="button">Lorem Ipsum! &raquo;</a></p> -->
        </div>
        <div class="col-md-6   ">
          <div class="wow fadeInDown"><h1 >Heading</h1>
          <h2 > Sub-heading goes here </h2>
          </div>
          <div class="wow fadeInUp">
          <div class="row liststyle">
            <ul class="col-md-6">
              <li>  • Lorem ipsum dolor sit </li>
              <li>• Consectetur adipiscing </li>
              <li>• Massa at sem convallis</li>
              <li>• Nulla ornare libero et</li>
              <li>• Donec eget orci vitae </li>
              <li>• Fringilla dignissim sed</li>
              <li>• Enim rhoncus pulvinar.</li>
              <li>• Suspendisse imperdiet </li>
            </ul>
             <ul class="col-md-6">
              <li>  • Lorem ipsum dolor sit </li>
              <li>• Consectetur adipiscing </li>
              <li>• Massa at sem convallis</li>
              <li>• Nulla ornare libero et</li>
              <li>• Donec eget orci vitae </li>
              <li>• Fringilla dignissim sed</li>
              <li>• Enim rhoncus pulvinar.</li>
              <li>• Suspendisse imperdiet </li>
            </ul>
          </div>
        </div>
       </div>
      </div>
    </div>
  </div>

  <section class="CS2">

      <div class="row">
    <div class="container">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 ">
          <div class="CS21">
            <h1 class="MS CS32H">
              Manufactureres Of 
            </h1>
          </div>
        </div>
      </div>
      <div class="row CS22">
        <div class="col-md-offset-1 col-md-1">
         <?php query_posts( array ( 'category_name' => 'manufactured', 'posts_per_page' => 4 ) );?>
        </div>
        <?php if(have_posts()) : ?>
        <div class="PSCS col-md-8">
                  <div id="owl-demo">
                  <?php while(have_posts()) : the_post(); ?>
            <div class="item"><img src="<?php print THEMEROOT;?>/img/products/Cimage21.png" alt="Owl Image"></div>
                <?php endwhile;?>
          </div>
                </div>
  <?php endif;?>
         
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>



	

<?php get_footer();?>
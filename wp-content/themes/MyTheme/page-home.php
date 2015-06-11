<?php
/****
Template Name: Home Page
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
        <div class=" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-3 ">
          <div class="CS21">
            <h1 class="MS CS32H">
              Manufactureres Of 
            </h1>
          </div>
        </div>
      </div>
      <div class="row CS22 ">
        <div class="container">
         <?php query_posts( array ( 'category_name' => 'manufactured', 'posts_per_page' => 4 ) );?>
        <?php if(have_posts()) : ?>
        <div class="PSCS col-md-offset-2 col-md-8  col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-3">
                  <div id="owl-demo">
                  <?php while(have_posts()) : the_post(); ?>
                    <?php if(has_post_thumbnail()) : ?>
            <a href="<?php echo the_permalink();?>"><div class="item"><?php the_post_thumbnail();?><h3><?php the_title();?></h3></div></a>
                  <?php else :?>
                     <a href="<?php echo the_permalink();?>"><div class="item"><img src="<?php print THEMEROOT;?>/img/products/Cimage21.png" alt="Owl Image"><h3><?php the_title();?></h3></div></a>
                   <?php endif;?>
                <?php endwhile;?>
        </div>
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
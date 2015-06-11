 <?php get_header();?>


 <!-- Prodcuts. per partner page  page  -->
 <div class="row PCS00">
  <div class="container">
    <div class="row PCS0 responsivepaddingtop">
      <div class="col-md-offset-4  col-md-6  col-xs-11">
        <h1 class="PCSH"> <?php single_cat_title( '', true ); ;?></h1>
      </div>
      <div class="col-md-offset-1 col-md-11 clearfix col-xs-10 col-xs-offset-1 PCS1">
        <div>
          <div class="col-md-offset-3  col-md-4">
            <img src="<?php echo z_taxonomy_image_url($row->term_id);?>" />
          </div>
          <div class="row">
            <div class="col-md-offset-3 col-md-6 PBG clearfix">
              <p class="PCS12 col-md-10 clearfix">
                Cras dapibus eu nulla quis semper. Donec quis faucibus nunc, in varius leo. Quisque ullamcorper, orci ut vestibulum porta. <br>
                Nulla facilisi. Etiam ac sodales nibh. Vivamus suscipit tempus mi, vitae volutpat leo
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <?php if(have_posts()) : ?>
    <div class="row">
      <div class=" col-md-offset-1 ">
        <div class="PSCM clearfix">
          <!-- // Prodcut Style Custom slider  -->
          <?php while(have_posts()) : the_post();?>
            <div class="col-md-3 col-md-offset-0 col-xs-5 col-xs-offset-1 productsimg">
              <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?>
            </div>
          <?php endwhile;?>
        </div>
      </div>
    </div>

    <!--  -->
  <?php endif;?>



  <?php if(ICL_LANGUAGE_CODE == 'ar') {
    get_footer('ar');
  } else {
    get_footer();
  }

  ?>

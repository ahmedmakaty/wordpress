 <?php get_header();?>


<!-- Prodcuts. per partner page  page  -->
    <div class="row PCS00">
    <div class="container">
      <div class="row PCS0">
        <div class="col-md-offset-3 col-md-6">
          <h1 class="PCSH">Principles : <?php single_cat_title( '', true ); ;?></h1>
        </div>
        <div class="col-md-offset-1 col-md-11 PCS1">
            <div class="row">
              <div class="col-md-offset-3  col-md-4">
                <img src="<?php echo z_taxonomy_image_url($row->term_id);?>" />
              </div>
              <div class="row">
                <div class="col-md-offset-3 col-md-6 PBG">
                  <p class="PCS12 col-md-10">
                    Cras dapibus eu nulla quis semper. Donec quis faucibus nunc, in varius leo. Quisque ullamcorper, orci ut vestibulum porta. <br>
Nulla facilisi. Etiam ac sodales nibh. Vivamus suscipit tempus mi, vitae volutpat leo
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-offset-7 col-md-2"><img src="img/products/Cimage2.png" alt="partner outline "></div>
              </div>
            </div>
        </div>
      </div>



<?php get_footer(); ?>

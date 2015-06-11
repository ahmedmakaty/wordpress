<?php get_header();?>






<!-- Single products -->
<section class="productPageBG" >
  <div class="container  ProductStyle">

    <div class="row title col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
      <h2 class="Hwhite"> <?php the_title();?></h2>
    </div>
    <div class="row productcontent col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1">
      
      <?php the_post_thumbnail('full',array('class'=>'img-responsive'));?>
    </div>

    <?php $image =  get_field('table_image');?>
    <?php if(!empty($image)) : ?>
    <div class=" row productdesc col-md-8 col-md-offset-2 ">
      <img src="<?php echo $image['url']; ?>" alt="image descriptions" class="img-responsive">
    </div>
    <?php else : ?>
    <div class=" row productdesc col-md-8 col-md-offset-2 ">
      <img src="<?php print THEMEROOT;?>/img/pimage1.png" alt="image descriptions" class="img-responsive">
    </div>
    <?php endif;?>




  </div>

  <?php if( have_rows('gallery') ): ?> 
  <div class="row CS22"  > 
        <div class="container">
        <div class="PSCS col-md-offset-2 col-md-8  col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-3">
            <div id="owl-demo">
                  <?php while ( have_rows('gallery') ) : the_row(); ?><?php $img =  get_sub_field('image');?>
                       <div class="item"><img src="<?php echo $img['url']; ?>" alt="image descriptions" class="img-responsive"></div>
                  <?php endwhile;?>
            </div>
        </div>
        </div>
  </div>
  
  <?php endif;?>
</section>

<?php if(ICL_LANGUAGE_CODE == 'ar') {
  get_footer('ar');
} else {
  get_footer();
}

?>
<?php get_header();?>



<a href="<?php echo the_permalink();?>"><?php the_post_thumbnail();?></a>


<!-- Single products -->
<section class="productPageBG" >
  <div class="container  ProductStyle">

    <div class="row title col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
      <h2> <?php the_title();?></h2>
    </div>
    <div class="row productcontent col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1">
      <img src="<?php print THEMEROOT;?>/img/Cimage.jpg" alt="Product name " class="img-responsive">
    </div>

    <div class=" row productdesc col-md-8 col-md-offset-2 ">
      <img src="<?php print THEMEROOT;?>/img/pimage1.png" alt="image descriptions" class="img-responsive">
    </div>
  </div>
</section>


<?php get_footer();?>
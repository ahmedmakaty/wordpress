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
          <div class="row ">
        
        <div class="col-md-6   ">
          <div class="wow fadeInDown"><h1 >العنوان الأول</h1>
          <h2 > بعض التفاصيل هنا </h2>
          </div>
          <div class="wow fadeInUp">
          <div class="row liststyle">
             <ul class="col-md-6">
              <li>• شركة المسلة لتصنيع </li>
              <li>• ملحقات الكابلات شركة المسلة</li>
              <li>• بعض التفاصيل الأخرى هنا</li>
              <li>• هنا نضع المنتجات</li>
              <li>• القليل من التفاصيل  </li>
              <li>• شركة المسلة لتصنيع</li>
              <li>• ملحقات الكابلات شركة المسلة</li>
              <li>• هنا نضع المنتجات</li>
            </ul>
            <ul class="col-md-6">
              <li>• شركة المسلة لتصنيع </li>
              <li>• ملحقات الكابلات شركة المسلة</li>
              <li>• بعض التفاصيل الأخرى هنا</li>
              <li>• هنا نضع المنتجات</li>
              <li>• القليل من التفاصيل  </li>
              <li>• شركة المسلة لتصنيع</li>
              <li>• ملحقات الكابلات شركة المسلة</li>
              <li>• هنا نضع المنتجات</li>
            </ul>
            
          </div>
        </div>
       </div>
       <div class="col-md-6 wow fadeInRight">
          <img class="img-responsive" src="<?php print THEMEROOT;?>/img/Cimage.jpg" alt="el masalla main tools">
         <!--  <p><a class="btn btn-default" href="#" role="button">Lorem Ipsum! &raquo;</a></p> -->
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
             منتجات شركة المسلة

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

            <a href="<?php echo the_permalink();?>"><div class="item"><img src="<?php print THEMEROOT;?>/img/products/Cimage21.png" alt="Owl Image"><h3><?php the_title();?></h3></div></a>
                  
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



	

<?php get_footer("ar");?>
<?php
/****
Template Name: Ar Products Page
*/
?>

<?php get_header(); ?>

 <section class="CS2">

      <div class="row">
    <div class="container">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 ">
          <div class="CS21">
            <h1 class="MS CS32H">
              منتجات الشركة
            </h1>
          </div>
        </div>
      </div>
      <div class="row CS22">
        <div class="col-md-offset-1 col-md-1">
         <?php query_posts( array ( 'category_name' => 'manufar', 'posts_per_page' => 4 ) );?>
        </div>
        <?php if(have_posts()) : ?>
        <div class="PSCS col-md-8">
                  <div id="owl-demo">
                  <?php while(have_posts()) : the_post(); ?>

            <a href="<?php echo the_permalink();?>"><div class="item"><img src="<?php print THEMEROOT;?>/img/products/Cimage21.png" alt="Owl Image"><h3><?php the_title();?></h3></div></a>
                  
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





   <!-- Agents and dist content -->

           <section class="CS3">
            <div class="container">
              <!-- cs31 -->
              <div class="CS31 CsLead CsPadding Cscenter row">
                <h1 class="Hwhite">وكلاء و موزعون</h1>
              </div>

              <?php $categories = get_categories('child_of=22');?>
              <!-- cs32 -->
              <div class="CS32 CsPadding Cscenter row">

              <?php foreach ($categories as $row) { ?>
              	
                <div class="col-md-offset-1 col-md-3">
                  <a href="<?php echo get_category_link($row->term_id);?>"><img src="<?php echo z_taxonomy_image_url($row->term_id);?>" alt="" ></a>
                  <h2 class="CS32H"><?php echo $row->name;?></h2>
                     
                </div>

               <?php } ?>
                 
               <div>
               </div>
              </section>




<?php get_footer('ar'); ?>
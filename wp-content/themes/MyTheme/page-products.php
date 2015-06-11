<?php
/****
Template Name: Products Page
*/
?>

<?php get_header(); ?>

 <section class="CS2">

      <div class="row">
    <div class="container">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 responsivepaddingtop ">
          <div class="CS21">
            <h1 class="MS CS32H">
              Manufactureres Of 
            </h1>
          </div>
        </div>
      </div>
      <div class="row CS22">
        
         <?php query_posts( array ( 'category_name' => 'manufactured', 'posts_per_page' => 4 ) );?>
        
        <?php if(have_posts()) : ?>
                <div class="PSCS col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 col-xs-10 col-xs-offset-1">

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
                <h1 class="Hwhite">AGENTS & DISTRUPUTERS</h1>
              </div>

              <?php $categories = get_categories('child_of=13');?>
              <!-- cs32 -->
              <div class="CS32 CsPadding Cscenter row">

              <?php foreach ($categories as $row) { ?>
              	
                <div class="col-md-offset-1 col-md-3">
                  <a href="<?php echo get_category_link($row->term_id);?>"><img src="<?php echo z_taxonomy_image_url($row->term_id);?>" alt="" ></a>
                  <h4 class="CS32H"><?php echo $row->name;?></h4>
                     
                </div>

               <?php } ?>
                 
               <div>
               </div>
              </section>




<?php get_footer(); ?>
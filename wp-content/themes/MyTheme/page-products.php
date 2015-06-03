<?php
/****
Template Name: Products Page
*/
?>

<?php get_header(); ?>

<section class="CS2">
    <div class="container">
      <div class="row">
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
        <div class="col-md-8" id="link">
        <?php while(have_posts()) : the_post();?>
          <a href="<?php the_permalink();?>"><div class="col-md-3"><img src="<?php print THEMEROOT;?>/img/cimage1.jpg" alt="" href="#">
            <h3><?php the_title()?></h3>
          </div></a>
      <?php endwhile;?>
  <?php endif;?>
         
          </div>
        </div>
        <div class="col-md-1 col-md-offset-1">
          <div class="icon-l"></div>
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
                  <h2 class="CS32H"><?php echo $row->name;?></h2>
                     
                </div>

               <?php } ?>
                 
               <div>
               </div>
              </section>




<?php get_footer(); ?>
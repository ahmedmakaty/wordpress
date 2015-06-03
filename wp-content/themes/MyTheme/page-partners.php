<?php
/****
Template Name: Principles Page
*/
?>

<?php get_header(); ?>


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

              <pre>
              <?php print_r(get_categories());?>
              </pre>

<?php get_footer(); ?>
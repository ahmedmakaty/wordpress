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
              <div class="CS31 CsLead  CsPadding Cscenter responsivepaddingtop row">
              <?php if(ICL_LANGUAGE_CODE == 'ar') : ?>
                <h1 class="Hwhite">وكلاء و موزعون</h1>
              </div>
              
              <?php $categories = get_categories('child_of=22');?>
            <?php else : ?>
                <h1 class="Hwhite">AGENTS & DISTRUPUTERS</h1>
              </div>

              <?php $categories = get_categories('child_of=13');?>

            <?php endif;?>
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
<?php if(ICL_LANGUAGE_CODE == 'ar') {
  get_footer('ar');
} else {
  get_footer();
}

?>

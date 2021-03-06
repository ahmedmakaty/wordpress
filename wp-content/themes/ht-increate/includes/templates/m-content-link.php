<?php
global $ht_options;

// external link
$ex_link = get_post_meta($post->ID, '_ht_link_post_format', TRUE);
$permalink = ( !empty($ex_link) ) ? $ex_link :  get_permalink();

?>
<div <?php post_class('clearfix'); ?>>
    <div class="content_half">
        <?php get_template_part('includes/templates/content-meta');?>
        <div class="post_content clearfix">
           <?php the_content(__('Continue Reading<i class="fa-double-angle-right"></i>','highthemes')) ;?>
        </div>  
    </div>
    
</div><!-- post link -->
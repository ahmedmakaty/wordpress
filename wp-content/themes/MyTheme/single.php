<?php get_header();?>

<br />
<h6><?php the_title();?></h6>
<a href="<?php echo the_permalink();?>"><?php the_post_thumbnail();?></a>

<?php get_footer();?>
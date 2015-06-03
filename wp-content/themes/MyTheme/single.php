<?php get_header();?>

<pre>
<?php 

        $categories = get_categories( $args );
        $args = array(
            'type'                     => 'post',
            
            'parent'                   => '',
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => 1,
            'hierarchical'             => 1,
            'exclude'                  => '',
            'include'                  => '',
            'number'                   => '',
            'taxonomy'                 => 'category',
            'pad_counts'               => false 
            ); 
        print_r($categories);

?>
</pre>

<?php get_footer();?>
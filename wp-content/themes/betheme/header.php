<?php
/**
 * The Header for our theme.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<?php 
	if( $_GET && key_exists('mfn-rtl', $_GET) ):
		echo '<html class="no-js" lang="ar" dir="rtl">';
	else:
?>
<html class="no-js" <?php language_attributes(); ?> <?php mfn_tag_schema(); ?>>
<?php endif; ?>

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( mfn_opts_get('responsive') ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">'; ?>

<title itemprop="name"><?php
if( mfn_title() ){
	echo mfn_title();
} else {
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'betheme' ), max( $paged, $page ) );
}
?></title>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-scrollto.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.simplyscroll.js"></script>
<link href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css" rel="stylesheet">
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<!-- end of Bootstrap 3 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.js"></script>
 <!-- Font Awesome -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">

<?php do_action('wp_seo'); ?>

<link rel="shortcut icon" href="<?php mfn_opts_show('favicon-img',THEME_URI .'/images/favicon.ico'); ?>" type="image/x-icon" />	

<!-- wp_head() -->
<?php wp_head(); ?>
</head>

<!-- body -->
<body <?php body_class(); ?>>
	
	<?php do_action( 'mfn_hook_top' ); ?>
	
	<?php /*get_template_part( 'includes/header', 'sliding-area' ); */?>
	
	<?php if( mfn_header_style( true ) == 'header-creative' ) get_template_part( 'includes/header', 'creative' ); ?>
	
	<!-- #Wrapper -->
	<div id="Wrapper">
	
		<?php 
			// Header Featured Image ----------
			$header_style = '';
			
			// Image -----
			if( mfn_ID() && ! is_search() ){
				if( ( ( mfn_ID() == get_option( 'page_for_posts' ) ) || ( get_post_type() == 'page' ) ) && has_post_thumbnail( mfn_ID() ) ){
					
					// Pages & Blog Page ---
					$subheader_image = wp_get_attachment_image_src( get_post_thumbnail_id( mfn_ID() ), 'full' );
					$header_style .= ' style="background-image:url('. $subheader_image[0] .');"';

				} elseif( get_post_meta( mfn_ID(), 'mfn-post-header-bg', true ) ){

					// Single Post ---
					$header_style .= ' style="background-image:url('. get_post_meta( mfn_ID(), 'mfn-post-header-bg', true ) .');"';

				}
			}
			
			// Attachment -----
			if( mfn_opts_get('img-subheader-attachment') == 'fixed' ){
				$header_style .= ' class="bg-fixed"';
			} elseif( mfn_opts_get('img-subheader-attachment') == 'parallax' ){
				$header_style .= ' class="bg-parallax" data-stellar-background-ratio="0.5"';
			}
		?>
		
		<?php /*if( mfn_header_style() == 'header-below' ) echo mfn_slider(); */?>
	
		<!-- #Header_bg -->
		<div id="Header_wrapper" <?php echo $header_style; ?>>
	
			<!-- #Header -->
			<header>
				<?php /*if( mfn_header_style( true ) != 'header-creative' ) get_template_part( 'includes/header', 'top-area' );*/ ?>
				<!-- My header -->

				<!-- start of inner -->

				     <div class="container-fluid">
						
						       <!-- start of nav -->
				    <nav class="navbar navbar-default navbar-fixed-top" id="topmenufull">
				          <div class="container-fluid"id="insetborder"  >
				            <!-- Brand and toggle get grouped for better mobile display -->
				            <div class="navbar-header">
				              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				              <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				              </button>
				               <a class="navbarlogo navbar-brand" href="<?php echo home_url();?>" id="logocont"><img src="<?php bloginfo('template_url'); ?>/img/logo/masallalogo.png" alt="El Masalla Logo" id="logo"></a>
				            </div>

				            <?php mfn_wp_nav_menu();?>

				    </nav>

				<!-- end of header -->	

				<?php /*if( mfn_header_style() != 'header-below' ) echo mfn_slider();*/ ?>
			</header>

			
				
			
		
		</div>

		<div style="margin-top:90px;">
		
		<?php do_action( 'mfn_hook_content_before' ); ?>
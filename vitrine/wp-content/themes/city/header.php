<?php /* The City Header */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- Title -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );

	?>
</title>

<!-- Style -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Head -->
<?php 
	get_template_part((include"style.php"));
	/* Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	wp_enqueue_script( '' );
	wp_head(); 
?>

</head>

<body class="<?php body_class( $class ); ?>">

<!-- Container Start-->
<div class="container_16 margin31">
	
    <div id="post-<?php the_ID(); ?>" class="<?php post_class(); ?> dnone"></div>
    
    <div id="topdot" class="grid_16 margin"></div>
    
    <!-- Top Menu -->
    <div class="grid_16 margin">
      <div id="topmenu">
      	<ul>
        	<li><a id="contactline1" href="#contactline"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/mail.png" alt=""></a></li>
            <li><a id="contactline2" href="#contactadress"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/phone.png" alt=""></a></li>
            <li>
             <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            	<input id="s" name="s" type="text" value="<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'topsearch') ) : ?><?php get_option_tree( 'topsearch', '', 'true' ); ?><?php else : ?>Search:<?php endif; endif; ?>" onfocus="if(this.value=='<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'topsearch') ) : ?><?php get_option_tree( 'topsearch', '', 'true' ); ?><?php else : ?>Search:<?php endif; endif; ?>')this.value='';" onblur=	"if(this.value=='')this.value='<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'topsearch') ) : ?><?php get_option_tree( 'topsearch', '', 'true' ); ?><?php else : ?>Search:<?php endif; endif; ?>';"/>
             </form>
            </li>
        </ul>
        <!-- Popup Contact Form -->
        <div  class="dnone">
          <div id="contactline" class="popupcontact">
              <?php dynamic_sidebar(5); ?>
          </div>
		</div>
        <!-- Popup Contact Adress -->
        <div  class="dnone">
          <div id="contactadress" class="popupcontact">
              <?php dynamic_sidebar(6); ?>
          </div>
		</div>
        
        <div class="dnone">
        	<?php add_custom_image_header ?>
            <?php add_custom_background() ?>
        </div>
      </div>
    </div>
    
    <!-- Navigation Start-->
    <div id="navigation" class="grid_16 margin">
        
        <!-- #Logo-->
        <div class="grid_4 logo margin">
            <a href="<?php echo home_url('url'); ?>">
			  <?php if ( function_exists( 'get_option_tree') ) :
				if( get_option_tree( 'logo') ) : ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( home_url( 'name', 'display' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php get_option_tree( 'logo', '', 'true' ); ?>&h=90&w=240" alt=""/>
				</a>
				<?php else : ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( home_url( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/logo.png" alt=""></a>
              <?php endif; endif; ?>
            </a>
        </div>
        
        <!-- #Menu-->
        <div class="grid_12 topmenu">
        	<?php wp_nav_menu( array(  'theme_location' => 'topmenu', 'menu_id' => 'menu' ) ); ?>
        </div>        
    </div>
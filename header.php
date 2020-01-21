<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abel_RAD_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'abel_rad_theme' ); ?></a>

	<header id="masthead" class="site-header">
	<nav id="menu" class="navbar navbar-expand-md navbar-light navbar-expand-lg" role="navigation">
		<div class="site-branding navbar-brand">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
			  
			  <?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'	 =>	'nav navbar-nav',
					'theme_location'	=>'primary',
					'depth'				=>2,
					'container'			=>'div',
					'container_class'	=>'collapse navbar-collapse',
					'container_id'		=>'bs-example-navbar-collapse-1',
				) );
				?>
			</button>
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$abel_rad_theme_description = get_bloginfo( 'description', 'display' );
			if ( $abel_rad_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $abel_rad_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<div class="collapse navbar-collapse nav-container ">
			<nav id="site-navigation" class="navbar navbar-default main-navigation myTopnav collapse navbar-collapse">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
      
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'	 =>	'nav navbar-nav',
					'theme_location'	=>'primary',
					'depth'				=>2,
					'container'			=>'div',
					'container_class'	=>'collapse navbar-collapse',
					'container_id'		=>'bs-example-navbar-collapse-1',
				) );
				?>
				
			</nav>
			
					
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

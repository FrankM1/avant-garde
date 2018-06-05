<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avante_Garde
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avante-garde' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-wrapper">
			<div class="header">
				<div class="section-inner site-branding">
					<?php the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
		
					$avante_gard_description = get_bloginfo( 'description', 'display' );
		
					if ( $avante_gard_description || is_customize_preview() ) :
		
						?><p class="site-description"><?php echo $avante_gard_description; /* WPCS: xss ok. */ ?></p><?php
		
					endif; 
					?>
				</div><!-- .site-branding -->
			</div><!-- .header -->
			
			<div class="toggles">
						
				<div class="nav-toggle toggle">
					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
				</div>
				
				<div class="search-toggle toggle">
					
					<div class="genericon genericon-search"></div>
					
				</div>
				
				<div class="clear"></div>
				
			</div><!-- .toggles -->
		
		</div><!-- .header-wrapper -->
	
		<div class="navigation">
			
			<div class="section-inner">
				
				<ul class="mobile-menu">
				
					<?php if ( has_nav_menu( 'primary' ) ) {

						$menu_args = array( 
							'container' 		=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary'
						);
																		
						wp_nav_menu( $menu_args ); 

					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> ''
						);

						wp_list_pages( $list_pages_args );
						
					} ?>
					
				</ul>
				
				<div class="mobile-search">
				
					<?php get_search_form(); ?>
				
				</div>
				
				<ul class="main-menu">
				
					<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( $menu_args ); 
					} else {
						wp_list_pages( $list_pages_args );
					} 
					?>
					
				</ul>
				
				<div class="clear"></div>
				
			</div><!-- .section-inner -->
			
		</div><!-- .navigation -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'avante-garde' ); ?></button>
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

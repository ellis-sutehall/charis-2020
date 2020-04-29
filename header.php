<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package charis-2020
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'charis-2020' ); ?></a>
	
	<section class="search-wrap">
		<div class="container">
		<?php
			if(is_active_sidebar('sidebar-2')){
				dynamic_sidebar('sidebar-2');
			}
		?>
		</div>
	</section>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="brand-wrap">
				<div class="icons-left">
					<a class="search-icon" href="#" title="Search">
						<span class="icon is-small"><i class="fas fa-search" aria-hidden-true></i></span>
					</a>
				</div>
				
				<div class="site-branding">
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				
				<div class="icons-right">
					<a class="my-account-icon" href="/my-account">
						<span class="icon is-small" title="My Account"><i class="fas fa-user" aria-hidden-true></i></span>
					</a>
					<a class="basket-icon" href="/basket">
						<span class="basket icon is-small" title="Basket"><i class="fas fa-shopping-basket" aria-hidden-true></i></span>
					</a>
					<a class="count" href="/basket">
						<span class='basket-count'>(0)</span>
					</a>
				</div>
				<a role="button" class="navbar-burger" aria-controls="primary-menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			
			<nav id="site-navigation" class="navbar main-navigation">
				<div class="mobile-menu-icons show-for-mobile">
					<a class="search-icon" href="#" title="Search">
						<span class="icon is-small"><i class="fas fa-search" aria-hidden-true></i></span>
					</a>
					<a class="my-account-icon" href="/my-account">
						<span class="icon is-small" title="My Account"><i class="fas fa-user" aria-hidden-true></i></span>
					</a>
				</div>
				<?php
				$args = array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'navbar-menu',
				);
				wp_nav_menu($args);
				?>
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

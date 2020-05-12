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

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title><?php wp_title('|', true, 'right'); ?></title>

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
			<div class="brand-wrap is-vcentered">
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
				<div class="mobile-menu-icons hide-for-desktop">
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
					'menu' => 'menu 1',
				);
				wp_nav_menu($args);
				?>
			</nav><!-- #site-navigation -->

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

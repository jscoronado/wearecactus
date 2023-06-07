<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wearecactus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="app" class="site-app">
	<header id="header-cactus">

		<div class="logo__header-cactus">
			<a href="<?php echo get_home_url(); ?>">
			<img src="/wearecactus/wp-content/uploads/2023/06/logo.png" alt="We Are Cactus" class="logo-dark">
			<img src="/wearecactus/wp-content/uploads/2023/06/logo-W.png" alt="We Are Cactus" class="logo-light">
		</a>
		</div>

		<div class="menu-icon">
			<span class="menu-icon__line menu-icon__line-left"></span>
			<span class="menu-icon__line"></span>
			<span class="menu-icon__line menu-icon__line-right"></span>
		</div>

		<nav class="nav">
			<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'main-menu',
						'menu_id'        	=> 'main-menu',
						'menu_class' 	 	=> 'nav__list',
						'container_class' 	=> 'nav__content',
						'add_li_class'  	=> 'nav__list-item'
					)
				);
				?>
		</nav>

	</header>

	<main id="content-app">

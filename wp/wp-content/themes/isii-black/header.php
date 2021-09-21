<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		OK<br>
		Hello World<br>
		Hello World<br>
		Hello World<br>
		Hello World<br>
		Hello World<br>
		Hello World<br>
		Hello World<br>
		done<br>
		<?php
		wp_nav_menu();
		?>
	</header>

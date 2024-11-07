<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title> <?php wp_title('', true,''); ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="msapplication-TileColor" content="#12A0FF">
	<meta name="theme-color" content="#12A0FF">
	<meta name="apple-mobile-web-app-status-bar-style" content="#12A0FF">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<?php if ( is_home() or is_front_page() ) { ?>
    <body <?php if ( !isset($_SESSION['preloader']) || empty($_SESSION) ): $_SESSION['preloader'] = 'true'; body_class(['loading ']); endif; body_class(); ?>>
<?php } else { ?>
    <body <?php body_class(); ?>>
<?php } ?>

<div id="overlay"></div>

<div id="page" class="big-container">
	
	<header id="header">

    </header>

    <main id="content">
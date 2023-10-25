<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Batta Delivery
 */ 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
        <!--<title>Batta Delivery</title>-->
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <header>
        <section class="search">Search</section>
        <section class="top-bar">
            <div class="brand">Logo</div>
            <div class="second-column">
                <div class="acount">Account</div>
                <nav class="main-menu">Menu</nav>
</div>
        </section>
    </header>
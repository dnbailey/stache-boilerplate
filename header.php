<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

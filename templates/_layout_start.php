<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture(); ?>" dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_title(); ?>
    <?php echo get_component('default', 'tagManager', ['code' => 'script']); ?>
    <link rel="shortcut icon" href="<?php echo public_path('favicon.ico'); ?>">
 
    <!-- import bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- important: hash files can change. Update! -->
    <script defer src="/dist/js/vendor.bundle.51cf3c3989802bda6211.js"></script>
    <script defer src="/dist/js/arDominionB5Plugin.bundle.ee01f345bf45cf8bd842.js"></script>
    <link href="/dist/css/arArchivesRedisapPlugin.bundle.5e47f9f2330e33f54f04.css" rel="stylesheet">

    <?php echo get_component_slot('css'); ?>

    <!-- customizations -->
    <script defer src="/plugins/arArchivesRedisapPlugin/custom-scripts.js"></script>
    <link href="/plugins/arArchivesRedisapPlugin/custom-styles.css" rel="stylesheet" >

  </head>

  <body class="d-flex flex-column min-vh-100 <?php echo $sf_context->getModuleName(); ?> <?php echo $sf_context->getActionName(); ?>">
    <?php echo get_component('default', 'tagManager', ['code' => 'noscript']); ?>
    <?php echo get_partial('header'); ?>
    <?php include_slot('pre'); ?>
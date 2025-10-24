<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture(); ?>" dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_title(); ?>
    <?php echo get_component('default', 'tagManager', ['code' => 'script']); ?>
    <link rel="shortcut icon" href="<?php echo public_path('favicon.ico'); ?>">
 
    <!-- CSS Bootstraṕ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script defer src="/dist/js/vendor.bundle.1697f26639ee588df9ee.js"></script>
    <script defer src="/dist/js/arDominionB5Plugin.bundle.e0fc15ed92535143cfc2.js"></script>
    <!-- <link href="/dist/css/arDominionB5Plugin.bundle.754d1b52f116f8298b36.css" rel="stylesheet"> -->
    <link href="/dist/css/arArchivesRedisapPlugin.bundle.754d1b52f116f8298b36.css" rel="stylesheet">
    <!-- <link href="/plugins/arArchivesRedisapPlugin/css/arArchivesRedisapPlugin.bundle.754d1b52f116f8298b36.css" rel="stylesheet"> -->

    <?php echo get_component_slot('css'); ?>

    <script defer src="/plugins/arArchivesRedisapPlugin/custom-scripts.js"></script>
    <link href="/plugins/arArchivesRedisapPlugin/custom-styles.css" rel="stylesheet" >

  </head>

  <body class="d-flex flex-column min-vh-100 <?php echo $sf_context->getModuleName(); ?> <?php echo $sf_context->getActionName(); ?>">
    <?php echo get_component('default', 'tagManager', ['code' => 'noscript']); ?>
    <?php echo get_partial('header'); ?>
    <?php include_slot('pre'); ?>

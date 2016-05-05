<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?= css(array(
    'assets/css/flexboxgrid.min.css',
    'assets/css/ionicons.min.css',
    'assets/css/style.css',
    'https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic',
  )) ?>
  <?= js(array(
    'assets/js/jquery-2.2.3.min.js',
    'assets/js/jquery.smooth-scroll.min.js',
    'assets/js/scripts.js',
  )) ?>

</head>
<body>

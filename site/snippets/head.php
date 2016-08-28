<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">



  <?
  $css_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    'assets/css/flexboxgrid.min.css',
    'assets/css/ionicons.min.css',
    'assets/css/owl.carousel.css',
    'assets/css/magnific-popup.css',
    'assets/css/style.css',
    ) : array(
    '//cdn.jsdelivr.net/flexboxgrid/6.3.0/flexboxgrid.min.css',
    '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
    '//fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic',
    'assets/css/style.css',
    );

  $js_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    'assets/js/jquery-2.2.3.min.js',
    'assets/js/jquery.smooth-scroll.min.js',
    'assets/js/jquery.sticky-kit.min.js',
    'assets/js/jquery.magnific-popup.js',
    'assets/js/owl.carousel.min.js',
    'assets/js/typed.min.js',
    'assets/js/scripts.js',
    ) : array(
    '//code.jquery.com/jquery-2.2.3.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js',
    '//cdn.jsdelivr.net/jquery.sticky-kit/1.1.2/jquery.sticky-kit.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js',
    'assets/js/scripts.js',
    );
  ?>
  
  <?= css($css_assets) ?>
  <?= js($js_assets) ?>

  <link id="favicon" rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>">

</head>
<body>

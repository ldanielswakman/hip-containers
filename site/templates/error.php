<?php snippet('head') ?>

<? if ($logo = $site->logo()) : ?>
  <a href="#top" class="logo u-pv20">
    <img src="<?= $site->image($logo)->url() ?>" alt="<?= $site->title()->html() ?>" class="logo__img-<?= $site->logo_size() ?>" />
  </a>
<? endif ?>

<?php snippet('nav') ?>

<main id="top" style="padding: 38vh 0; text-align: center;">

  Pagina niet gevonden...<br><br>

  <h2 class="c-green">...Selecteer een pagina aan de rechterkant! <i class="ion ion-ios-arrow-thin-right ion-15x u-ml20"></i></h2>
</main>

<?php snippet('footer') ?>
<?php snippet('head') ?>

<? if ($logo = $site->logo()) : ?>
  <a href="#top" class="logo u-pv20">
    <img src="<?= $site->image($logo)->url() ?>" alt="<?= $site->title()->html() ?>" class="logo__img-<?= $site->logo_size() ?>" />
  </a>
<? endif ?>

<?php snippet('nav') ?>

<div class="dialog-wrapper">
  <div id="top" class="dialog-spacer"></div>

  <?php snippet('../templates/dialog-offer') ?>

  <?php snippet('../templates/dialog-contact') ?>

  <div onclick="closeDialog();" id="dialog_mask"></div>
</div>


<main id="top">

  <? // looping over subpages as sections ?>
  <? foreach ($pages->visible() as $key => $section) :?>

    <?
    // determining background colour
    switch ( $section->bg() ) {
      case 'green' :  $bgcolor = '#9bc4b1; color: #fff'; break;
      case 'lightestgreen' : $bgcolor = '#f3f8f3'; break;
      case 'darkblue' : $bgcolor = '#626a82; color: #fff'; break;
      default :  $bgcolor = '#fff';
    }
    ?>

    <section id="<?= $section->slug() ?>" class="section <?= $section->template() ?>" style="background-color: <?= $bgcolor ?>;">

      <? snippet('curve', ['color' => $bgcolor, 'key' => $section->num()]) ?>
      <? snippet('../templates/' . $section->template(), ['section' => $section]) ?>

    </section>

  <? endforeach ?>

</main>

<?php snippet('footer') ?>
<?php snippet('head') ?>

<div class="logo u-pv20">
  <img src="<?= url('assets/images/logo.svg') ?>" alt="" />
</div>

<?php snippet('nav') ?>

<main id="top">

  <? foreach ($pages->visible() as $key => $section) :?>

    <?
    switch ( $section->bg() ) {
      case 'green' : 
        $bgcolor = '#59c183';
        break;
      case 'lightestgreen' :
        $bgcolor = '#f3f8f3';
        break;
      case 'darkblue' :
        $bgcolor = '#626a82; color: #fff';
        break;
      default : 
        $bgcolor = '#fff';
    }
    ?>

    <section id="<?= $section->slug() ?>" class="section" style="background-color: <?= $bgcolor ?>;">

      <? snippet('curve', ['color' => $bgcolor, 'key' => $section->num()]) ?>

      <div class="row section__content">
        <div class="col-sm-offset-2">
        </div>
        <div class="col-xs col-sm-8">
          <h4 class="u-mb20"><?= $section->title() ?></h4>
          <p><?= $section->text()->kirbytext() ?></p>
        </div>
      </div>
    </section>

  <? endforeach ?>

</main>

<?php snippet('footer') ?>
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
        $bgcolor = '#59c183; color: #fff';
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

      <? if($section->slug() == 'intro') :?>

        <div class="row">
          <div class="col-xs col-sm-5 col-sm-offset-1">
            <h4 class="u-mb20"><?= $section->title() ?></h4>
            <p><?= $section->text()->kirbytext() ?></p>
          </div>
          <div class="col-xs col-sm-5">
            <figure class="hero-image">
              <img src="<?= url('assets/images/switch1.jpg') ?>" alt="" />
            </figure>
          </div>
        </div>

      <? elseif($section->slug() == 'verhaal') :?>

        <div class="row">
          <div class="col-xs col-sm-6">
            <div class="diagram diagram--stage1">

              <? snippet('diagram') ?>

            </div>
          </div>
          <div class="verhaal__text col-xs col-sm-6">
            <p><?= $section->text()->kirbytext() ?></p>
          </div>
        </div>

      <? else :?>

        <div class="row section__content">
          <div class="col-xs col-sm-8 col-sm-offset-2">
            <h4 class="u-mb20"><?= $section->title() ?></h4>
            <p><?= $section->text()->kirbytext() ?></p>
          </div>
        </div>

      <? endif ?>

    </section>

    <? if ($section->num() == $pages->visible()->count() - 1) :?>
      <div id="inbetween" data-parallax="2">
        <div class="image"></div>
      </div>
    <? endif ?>

  <? endforeach ?>

</main>

<?php snippet('footer') ?>
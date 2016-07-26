<?php snippet('head') ?>

<div class="logo u-pv20">
  <img src="<?= url('assets/images/logo.svg') ?>" alt="" />
</div>

<?php snippet('nav') ?>

<?php snippet('dialog-offer') ?>

<main id="top">

  <? foreach ($pages->visible() as $key => $section) :?>

    <?
    switch ( $section->bg() ) {
      case 'green' : 
        $bgcolor = '#9bc4b1; color: #fff';
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

      <? if($section->template() == 'section-intro') :?>

        <div class="row">
          <div class="col-xs col-sm-5 col-sm-offset-1">
            <h4 class="u-mb20"><?= $section->template() ?></h4>
            <p><?= $section->text()->kirbytext() ?></p>
          </div>
          <div class="col-xs col-sm-5">

            <? if ($carousel = $section->carousel_images()->toStructure()) : ?>
              <div class="owl-carousel owl-carousel-rounded">
                <? foreach($carousel as $image) : ?>
                  <figure class="hero-image"><img src="<?= $section->image($image)->url() ?>" alt="" /></figure>
                <? endforeach ?>
              </div>
            <? endif ?>

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

      <? elseif($section->template() == 'section-gallery') :?>

        <div class="row section__content">
          <div class="col-xs col-sm-8 col-sm-offset-2">
            <h4 class="u-mb20"><?= $section->title() ?></h4>
          </div>
        </div>

        <? if ($gallery = $section->gallery_images()->toStructure()) : ?>
          <div class="gallery">
            <div class="row">
              <? foreach($gallery as $key => $image) : ?>
              <?
              $class = '';
              if($key == 0 || $key %7 == 0) {
                $class .= ' gallery__indent';
              }
              if($key == 0 || $key %3 == 0) {
                $class .= ' gallery__indent--xs';
              }
              ?>
                <div class="col-xs-6 col-sm-3<?= $class ?>">
                  <div class="gallery__image">
                    <figure class="u-rounded-circle"><img src="<?= $section->image($image)->url() ?>" /></figure>
                  </div>
                </div>
              <? endforeach ?>
            </div>
          </div>
        <? endif ?>

      <? elseif($section->template() == 'section-boxes') :?>

        <div class="row section__content">
          <div class="col-xs col-sm-8 col-sm-offset-2">
            <h4 class="u-mb20"><?= $section->title() ?></h4>
            <div class="u-mb20"><?= $section->text()->kirbytext() ?></div>
          </div>
        </div>

        <? if ($boxes = $section->boxes()->toStructure()) : ?>
          <div class="boxes">
            <div class="row">
              <? foreach($boxes as $box) : ?>
                <div class="col-xs-12 col-sm-4">
                  <div class="boxes__box">
                    <h3 class="c-green u-mb10"><?= $box->title() ?></h3>
                    <?= $box->text()->kirbytext() ?>
                  </div>
                </div>
              <? endforeach ?>
            </div>
          </div>
        <? endif ?>

      <? elseif($section->template() == 'section-questions') :?>

        <div class="row section__content">
          <div class="col-xs col-sm-8 col-sm-offset-2">
            <h4 class="u-mb20"><?= $section->title() ?></h4>
          </div>
        </div>

        <? if ($questions = $section->items()->toStructure()) : ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
              <? foreach($questions as $item) : ?>
                <div class="u-mb20">
                  <h3><?= $item->question() ?></h3>
                  <?= $item->answer()->kirbytext() ?>
                </div>
              <? endforeach ?>
            </div>
          </div>
        <? endif ?>

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
<div class="row">
  <div class="col-xs-12 col-sm-5 col-sm-offset-1">
    <p><?= $section->text()->kirbytext() ?></p>
  </div>
  <div class="col-xs-12 col-sm-5 u-pt20">

    <? if ($carousel = $section->carousel_images()->toStructure()) : ?>
      <div class="owl-carousel owl-carousel-rounded">
        <? foreach($carousel as $image) : ?>
          <figure class="hero-image"><img src="<?= $section->image($image)->url() ?>" alt="" /></figure>
        <? endforeach ?>
      </div>
    <? endif ?>

  </div>
</div>

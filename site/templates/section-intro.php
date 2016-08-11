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

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
            <figure class="u-rounded-circle"><img src="<?= thumb($section->image($image), array('width' => 250))->url() ?>" /></figure>
          </div>
        </div>
      <? endforeach ?>
    </div>
  </div>
<? endif ?>

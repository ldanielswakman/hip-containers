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

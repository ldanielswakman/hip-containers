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

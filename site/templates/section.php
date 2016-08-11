<? if($section->slug() == 'verhaal') :?>

  <div class="row section__content">
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

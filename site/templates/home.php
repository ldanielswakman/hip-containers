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

  <? $count = 0; // looping over subpages as sections ?>
  <? foreach ($pages->visible() as $key => $section) :?>

    <?
    $count++;
    $bgcolor = ($section->bg()->isNotEmpty()) ? h($section->bg()) : '';
    $textcolor = ($section->color()->isNotEmpty()) ? h($section->color()) : '';
    $colors = array(
      'white' => '#fff',
      'lightestgreen' => '#f3f8f3',
      'lightgreen' => '#b2d9c7',
      'green' => '#9bc4b1',
      'darkgreen' => '#8bb09f',
      'darkblue' => '#626a82',
      'darkgrey' => '#4a4e59',
    );
    if ($count > 2) {
      $prev = $pages->visible()->nth(intval($count - 1));
      $prevbg = ($prev->bg()->isNotEmpty()) ? h($prev->bg()) : '';
      $prev_bgcolor = $colors[$prevbg];
    } else { $prev_bgcolor = ''; }
    ?>

    <section id="<?= $section->slug() ?>" class="section <?= $section->template() ?> <?= 'bg-' . $bgcolor ?> <?= 'c-' . $textcolor ?>">

      <? snippet('curve', ['color' => $colors[$bgcolor], 'key' => $section->num()]) ?>
      <? snippet('../templates/' . $section->template(), ['section' => $section, 'prev_bgcolor' => $prev_bgcolor]) ?>

    </section>

  <? endforeach ?>

</main>

<?php snippet('footer') ?>
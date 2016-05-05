<?php snippet('head') ?>

<?php snippet('nav') ?>

<main id="top">

  <? foreach ($pages->visible() as $section) :?>

    <section id="<?= $section->slug() ?>" class="section u-pv40">
      <div class="row">
        <div class="col-xs">
          <h2><?= $section->title() ?></h2>
          <p><?= $section->text()->kirbytext() ?></p>
        </div>
      </div>
    </section>

  <? endforeach ?>

</main>

<?php snippet('footer') ?>
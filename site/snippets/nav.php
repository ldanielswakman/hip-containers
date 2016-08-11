<nav>
  <ul>
    <? foreach ($pages->visible() as $section) :?>
      <? if($section->template() != 'section-image') : ?>
        <li><a href="#<?= $section->slug() ?>"><?= $section->title() ?></a></li>
      <? endif ?>
    <? endforeach ?>
  </ul>
</nav>
<a href="javascript:toggleMenu();" class="nav-toggle"><i class="ion ion-2x ion-navicon"></i></a>

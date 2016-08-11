<nav>
  <ul>
    <? foreach ($pages->visible() as $section) :?>
      <li><a href="#<?= $section->slug() ?>"><?= $section->title() ?></a></li>
    <? endforeach ?>
  </ul>
</nav>
<a href="javascript:toggleMenu();" class="nav-toggle"><i class="ion ion-2x ion-navicon"></i></a>

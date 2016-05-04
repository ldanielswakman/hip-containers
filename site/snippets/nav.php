<nav>
  <ul>
    <? foreach ($pages->visible() as $section) :?>
      <li><a href="#<?= $section->slug() ?>"><?= $section->title() ?></a></li>
    <? endforeach ?>
  </ul>
</nav>

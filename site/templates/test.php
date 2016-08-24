<?php snippet('head') ?>

<section class="u-mv50">

  <form id="form" action="<?= $page->url() ?>#form" method="post" style="width: 400px; margin: 0 auto;">

    <label for="name" class="field--label required">NAME</label><br>
    <input class="field<? e($form->hasError('name'), ' error') ?>" type="text" name="name" id="name" value="<?= $form->echoValue('name') ?>" required />
    <br>

    <label for="email" class="field--label required">EMAIL</label><br>
    <input class="field<? e($form->hasError('_from'), ' error') ?>" type="email" name="_from" id="email" value="<?= $form->echoValue('_from') ?>" required />
    <br>

    <label for="message" class="field--label">MESSAGE</label><br>
    <textarea name="message" id="message" rows="4" class="field"><?= $form->echoValue('message') ?></textarea>
    <br>

    <a name="form"></a>
    <? if($form->hasMessage()): ?>
      <div class="form__message <? e($form->successful(), 'form__success', 'form__error') ?>">
        <? $form->echoMessage() ?>
      </div>
    <? endif ?>

    <button type="submit" class="button" name="_submit" value="<?= $form->token() ?>"<? e($form->successful(), ' disabled') ?>>Submit</button>

  </form>

</section>

<?php snippet('footer') ?>
<? $contact_form = $pages->find('contact-form') ?>

<form id="bericht" class="dialog u-pv40 u-pt20" action="<?= $site->uri() ?>#bericht" method="post">

  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">

      <div class="u-flex-center u-flex-space-between">
        <h2 class="c-green"><?= $contact_form->title() ?></h2>
      </div>

      <? if($contact_form_obj->hasMessage()): ?>
        <div class="form__message u-mt20 <? e($contact_form_obj->successful(), 'form__success', 'form__error') ?>">
          <?
          $message_str = '';
          // if not in debug mode, and if successful, loops and outputs only single string
          if(c::get('debug') !== true) {
            $messages = explode('.', $contact_form_obj->message());
            foreach ($messages as $message) {
              if(strpos($message, ' succesvol verzonden') !== false) {
                $message_str .= $message . '.';
                break;
              }
            } 
          }
          if (strlen($message_str) < 1) {
            $message_str = $contact_form_obj->message();
          }
          echo $message_str;
          ?>
        </div>
      <? endif ?>

      <? if($contact_form_obj->successful()): ?>
        <div>
          <a href="javascript:closeDialog()" class="button button--outline">Sluit venster</a>
        </div>
      <? endif?>

    </div>

    <? if($contact_form_obj->successful() == false): ?>
    <div class="col-xs-12 col-md-10 col-md-offset-1 u-mt20">

      <? if($contact_form->message_title()->isNotEmpty() && $contact_form->message_placeholder()->isNotEmpty()) : ?>
        <label for="opmerkingen" class="field--label"><?= strtoupper($contact_form->message_title()) ?></label>
        <textarea name="opmerkingen" class="field u-mb20" placeholder="<?= $contact_form->message_placeholder() ?>" rows="4"><? $contact_form_obj->echoValue('opmerkingen') ?></textarea>
      <? endif ?>

      <div class="row row-internalpadding">
        <? // if($contact_form->name_title()->isNotEmpty() && $contact_form->name_placeholder()->isNotEmpty()) : ?>
        <? $name_title = ($contact_form->name_title()->isNotEmpty()) ? $contact_form->name_title() : 'Naam'; ?>
        <? $name_placeholder = ($contact_form->name_placeholder()->isNotEmpty()) ? $contact_form->name_placeholder() : 'Uw naam'; ?>
        <div class="col-xs-12 col-sm-6">
          <label for="naam" class="field--label required"><?= strtoupper($name_title) ?></label>
          <input name="naam" type="text" class="field<? e($contact_form_obj->hasError('naam'), ' error') ?> u-mb20" placeholder="<?= $name_placeholder ?>" value="<? $contact_form_obj->echoValue('naam') ?>" required>
        </div>
        <? // endif ?>
        <? // if($contact_form->email_title()->isNotEmpty() && $contact_form->email_placeholder()->isNotEmpty()) : ?>
        <? $email_title = ($contact_form->email_title()->isNotEmpty()) ? $contact_form->email_title() : 'Naam'; ?>
        <? $email_placeholder = ($contact_form->email_placeholder()->isNotEmpty()) ? $contact_form->email_placeholder() : 'Uw naam'; ?>
        <div class="col-xs-12 col-sm-6">
          <label for="_from" class="field--label required"><?= strtoupper($email_title) ?></label>
          <input name="_from" type="email" class="field<? e($contact_form_obj->hasError('_from'), ' error') ?> u-mb20" placeholder="<?= $email_placeholder ?>" value="<? $contact_form_obj->echoValue('_from') ?>" required>
        </div>
        <? // endif ?>
      </div>

      <input type="checkbox" class="field--checkbox" name="_receive_copy" id="receive-copy" <?php e($contact_form->value('_receive_copy'), ' checked')?>/>
      <label for="receive-copy">Stuur een kopie van dit bericht naar mij</label>
      <br><br>

      <div class="u-flex-center u-flex-space-between">
        <a href="#" onclick="closeDialog()" class="button button--outline"><i class="ion ion-android-arrow-back"></i> Terug</a>
        <button type="submit" name="_submit" value="<?= $contact_form_obj->token() ?>" class="button button--primary button--large"<? e($contact_form_obj->successful(), ' disabled') ?>>Verstuur</button>
      </div>

    </div>
    <? endif ?>
    
  </div>

</form><!-- /.dialog -->

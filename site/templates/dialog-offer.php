<? $offer_form = $pages->find('offer-form') ?>

<form id="offerte" class="dialog u-pv40 u-pt20" action="<?= $site->uri() ?>#offerte" method="post">

  <? // snippet('curve', ['color' => '#fff']) ?>

  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">

      <div class="u-flex-center u-flex-space-between">

        <h2 class="c-green"><?= $offer_form->title() ?></h2>

        <? if(isset($show_estimate)): ?>
        <div class="offer__estimate">
          <h4>RICHTPRIJS</h4>
          <strong id="offer_price">&mdash;</strong>
        </div>
        <? endif ?>

      </div>

      <? if($offer_form_obj->hasMessage()): ?>
        <div class="form__message u-mt20 <? e($offer_form_obj->successful(), 'form__success', 'form__error') ?>">
          <?
          $message_str = '';
          // if not in debug mode, and if successful, loops and outputs only single string
          if(c::get('debug') !== true) {
            $messages = explode('.', $offer_form_obj->message());
            foreach ($messages as $message) {
              if(strpos($message, ' succesvol verzonden') !== false) {
                $message_str .= $message . '.';
                break;
              }
            } 
          }
          if (strlen($message_str) < 1) {
            $message_str = $offer_form_obj->message();
          }
          echo $message_str;
          ?>
        </div>
      <? endif ?>

      <? if($offer_form_obj->successful()): ?>
        <div>
          <a href="javascript:closeDialog()" class="button button--outline">Sluit venster</a>
        </div>
      <? endif?>

    </div>

    <? if($offer_form_obj->successful() == false): ?>
    <div class="col-xs-12 col-md-10 col-md-offset-1 u-mt20">

      <? // Questions ?>
      <? foreach ($offer_form->questions()->toStructure() as $question) : ?>

        <? $col = (strlen($question->answer_1_text()) > 10) ? 3 : 2 ?>

        <div class="question" id="<?= strtolower($question->title()) ?>">
          <label for="<?= strtolower($question->title()) ?>" class="field--label"><?= strtoupper($question->title()) ?></label>
          <input type="hidden" class="offer_form-field" name="<?= strtolower($question->title()) ?>" value="<? $offer_form_obj->echoValue(strtolower($question->title())) ?>">
          <div class="question__box u-mb10">
            <div class="row">
              <div class="col-xs-12 col-sm-<?= 12 - 2 * $col ?> question__box--content">
                <?= $question->question()->kirbytext() ?>
              </div>
              <div class="col-xs-6 col-sm-<?= $col ?> question__box--content">
                <button class="button question__button" data-value="<?= $question->answer_1_price() ?>"><?= $question->answer_1_text() ?></button>
              </div>
              <div class="col-xs-6 col-sm-<?= $col ?> question__box--content">
                <button class="button question__button" data-value="<?= $question->answer_2_price() ?>"><?= $question->answer_2_text() ?></button>
              </div>
            </div>
          </div>
        </div>

      <? endforeach ?>

      <input id="offer_price" type="hidden" name="richtprijs" value="<? $offer_form_obj->echoValue('richtprijs') ?>" />

      <? if($offer_form->message_title()->isNotEmpty() && $offer_form->message_placeholder()->isNotEmpty()) : ?>
        <label for="opmerkingen" class="field--label"><?= strtoupper($offer_form->message_title()) ?></label>
        <textarea name="opmerkingen" class="field u-mb20" placeholder="<?= $offer_form->message_placeholder() ?>" rows="4"><? $offer_form_obj->echoValue('opmerkingen') ?></textarea>
      <? endif ?>

      <div class="row row-internalpadding">
        <? // if($offer_form->name_title()->isNotEmpty() && $offer_form->name_placeholder()->isNotEmpty()) : ?>
        <? $name_title = ($offer_form->name_title()->isNotEmpty()) ? $offer_form->name_title() : 'Naam'; ?>
        <? $name_placeholder = ($offer_form->name_placeholder()->isNotEmpty()) ? $offer_form->name_placeholder() : 'Uw naam'; ?>
        <div class="col-xs-12 col-sm-6">
          <label for="naam" class="field--label required"><?= strtoupper($name_title) ?></label>
          <input name="naam" type="text" class="field<? e($offer_form_obj->hasError('naam'), ' error') ?> u-mb20" placeholder="<?= $name_placeholder ?>" value="<? $offer_form_obj->echoValue('naam') ?>" required>
        </div>
        <? // endif ?>
        <? // if($offer_form->email_title()->isNotEmpty() && $offer_form->email_placeholder()->isNotEmpty()) : ?>
        <? $email_title = ($offer_form->email_title()->isNotEmpty()) ? $offer_form->email_title() : 'Naam'; ?>
        <? $email_placeholder = ($offer_form->email_placeholder()->isNotEmpty()) ? $offer_form->email_placeholder() : 'Uw naam'; ?>
        <div class="col-xs-12 col-sm-6">
          <label for="_from" class="field--label required"><?= strtoupper($email_title) ?></label>
          <input name="_from" type="email" class="field<? e($offer_form_obj->hasError('_from'), ' error') ?> u-mb20" placeholder="<?= $email_placeholder ?>" value="<? $offer_form_obj->echoValue('_from') ?>" required>
        </div>
        <? // endif ?>
      </div>

      <input type="checkbox" class="field--checkbox" name="_receive_copy" id="receive-copy" <?php e($offer_form_obj->value('_receive_copy'), ' checked')?>/>
      <label for="receive-copy">Stuur een kopie van deze offerte naar mij</label>
      <br><br>

      <div class="u-flex-center u-flex-space-between">
        <a href="#" onclick="closeDialog()" class="button button--outline"><i class="ion ion-android-arrow-back"></i> Terug</a>
        <button type="submit" name="_submit" value="<?= $offer_form_obj->token() ?>" class="button button--primary button--large"<? e($offer_form_obj->successful(), ' disabled') ?>>Verstuur</button>
      </div>

      <script>
        // $('#offer_form [type="submit"]').click(function(e) {

        //   var error_free = true;
        //   $('#offer_form input[required]').each(function() {
        //     if($(this).val().length <= 0) { error_free = false; }
        //   });

        //   if (error_free) {

        //     e.preventDefault();

        //     $(this).addClass('isWorking');

        //     setTimeout(function() {
        //       $('#offer_form [type="submit"]').toggleClass('isWorking isComplete');
        //     }, 1000);

        //     setTimeout(function() {
        //       closeDialog();
        //       $('#offer_form [type="submit"]').removeClass('isWorking isComplete');
        //       $('#offer_form .question').removeClass('question--selected');
        //       $('#offer_form .question__button').removeClass('question__button--selected');
        //       $('#offer_form .offer_form-field').val('');
        //       updateOfferPrice();
        //     }, 2000);

        //   }

        // });
      </script>

    </div>
    <? endif ?>
  </div>

</form><!-- /.dialog -->
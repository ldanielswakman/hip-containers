<? $offer_form = $pages->find('offer-form') ?>

<div class="dialog-wrapper">
  <div id="offer" class="dialog u-pb40 u-pt20 isVisible">

    <? snippet('curve', ['color' => '#fff']) ?>

    <form id="offer_form" action="">

      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 u-mb20">

          <div class="u-flex-center u-flex-space-between stick-in-parent">

            <h2 class="c-green"><?= $offer_form->title() ?></h2>

            <div class="offer__estimate">
              <h4>RICHTPRIJS</h4>
              <strong id="offer_price">&mdash;</strong>
            </div>

          </div>

        </div>
        <div class="col-xs-12 col-md-8 col-md-offset-2">

          <? // Questions ?>
          <? foreach ($offer_form->questions()->toStructure() as $question) : ?>

            <? $col = (strlen($question->answer_1_text()) > 10) ? 3 : 2 ?>

            <div class="question" id="maat">
              <label class="field--label"><?= strtoupper($question->title()) ?></label>
              <input type="hidden" class="offer_form-field" name="<?= strtolower($question->title()) ?>" value="">
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

          <? if($offer_form->message_title()->isNotEmpty() && $offer_form->message_placeholder()->isNotEmpty()) : ?>
            <label class="field--label"><?= strtoupper($offer_form->message_title()) ?></label>
            <textarea name="description" class="field u-mb20" placeholder="<?= $offer_form->message_placeholder() ?>" rows="4"></textarea>
          <? endif ?>

          <div class="row row-internalpadding">
            <? if($offer_form->name_title()->isNotEmpty() && $offer_form->name_placeholder()->isNotEmpty()) : ?>
              <div class="col-xs-12 col-sm-6">
                <label class="field--label"><?= strtoupper($offer_form->name_title()) ?></label>
                <input name="name" type="text" class="field u-mb20" placeholder="<?= $offer_form->name_placeholder() ?>" required>
              </div>
            <? endif ?>
            <? if($offer_form->email_title()->isNotEmpty() && $offer_form->email_placeholder()->isNotEmpty()) : ?>
              <div class="col-xs-12 col-sm-6">
                <label class="field--label"><?= strtoupper($offer_form->email_title()) ?></label>
                <input name="email" type="email" class="field u-mb20" placeholder="<?= $offer_form->email_placeholder() ?>" required>
              </div>
            <? endif ?>
          </div>

          <div class="u-flex-center u-flex-space-between">
            <a href="#" onclick="closeDialog()" class="button button--outline"><i class="ion ion-android-arrow-back"></i> Terug</a>
            <button type="submit" class="button button--primary button--large">Verstuur</button>
          </div>

          <script>
            $('#offer_form [type="submit"]').click(function(e) {

              var error_free = true;
              $('#offer_form input[required]').each(function() {
                if($(this).val().length <= 0) { error_free = false; }
              });

              if (error_free) {

                e.preventDefault();

                $(this).addClass('isWorking');

                setTimeout(function() {
                  $('#offer_form [type="submit"]').toggleClass('isWorking isComplete');
                }, 1000);

                setTimeout(function() {
                  closeDialog();
                  $('#offer_form [type="submit"]').removeClass('isWorking isComplete');
                  $('#offer_form .question').removeClass('question--selected');
                  $('#offer_form .question__button').removeClass('question__button--selected');
                  $('#offer_form .offer_form-field').val('');
                  updateOfferPrice();
                }, 2000);

              }

            });
          </script>

        </div>
      </div>

    </form>

    <div class="u-pv40">
    </div>

  </div><!-- /.dialog -->

  <!-- <section class="section" style="background-color: #f3f8f3;">

    <? // snippet('curve', ['color' => '#f3f8f3']) ?>

  </section> -->

</div>

<div onclick="closeDialog();" class="" id="dialog_mask"></div>

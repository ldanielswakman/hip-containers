<div class="dialog-wrapper">
  <div id="offer" class="dialog u-pb40 u-pt20">

    <? snippet('curve', ['color' => '#fff']) ?>

    <form id="offer_form" action="">

      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 u-mb20">

          <div class="u-flex-center u-flex-space-between stick-in-parent">

            <h2 class="c-green">Vraag offerte aan</h2>

            <div class="offer__estimate">
              <h4>RICHTPRIJS</h4>
              <strong id="offer_price">
                &mdash;
                <!-- <small>€</small> 2.000 -->
              </strong>
            </div>

          </div>

        </div>
        <div class="col-xs-12 col-md-8 col-md-offset-2">

          <!-- Question 1 -->
          <div class="question" id="maat">
            <label class="field--label">MAAT</label>
            <input type="hidden" class="offer_form-field" name="maat" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-6 question__box--content">
                  <div>Wilt u een <strong>20ft</strong> of een <strong>40ft</strong> gebruikte container?</div>
                </div>
                <div class="col-xs-6 col-sm-3 question__box--content">
                  <button class="button question__button" data-value="1000">20ft <small>(6,06m x 2,43m)</small></button>
                </div>
                <div class="col-xs-6 col-sm-3 question__box--content">
                  <button class="button question__button" data-value="2500">40ft <small>(12,06m x 2,43m)</small></button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="question" id="afwerking">
            <label class="field--label">AFWERKING</label>
            <input type="hidden" class="offer_form-field" name="afwerking" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u de container aan de buitenzijde <strong>gespoten</strong> in een RAL kleur (geen metallics)?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="400">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 3 -->
          <div class="question" id="deur">
            <label class="field--label">DEUR</label>
            <input type="hidden" class="offer_form-field" name="deur" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u een kunststof <strong>openslaande deur</strong> <small class="u-opacity50">(1,80m x 2,10m)</small> aan de lange zijde in de container?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="2500">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 4 -->
          <div class="question" id="raam">
            <label class="field--label">RAAM</label>
            <input type="hidden" class="offer_form-field" name="raam" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u op de kopse zijde van de container een <strong>raam</strong> <small class="u-opacity50">(2,20 m * 2,20 m)</small>?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="1000">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 5 -->
          <div class="question" id="isolatie">
            <label class="field--label">ISOLATIE</label>
            <input type="hidden" class="offer_form-field" name="isolatie" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u de container <strong>geïsoleerd</strong> aan de binnenzijde?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="1000">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 6 -->
          <div class="question" id="licht">
            <label class="field--label">LICHT</label>
            <input type="hidden" class="offer_form-field" name="licht" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u 4 <strong>lichtpunten</strong> in de container?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="500">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Question 7 -->
          <div class="question" id="water">
            <label class="field--label">WATER</label>
            <input type="hidden" class="offer_form-field" name="water" value="">
            <div class="question__box u-mb10">
              <div class="row">
                <div class="col-xs-12 col-sm-8 question__box--content">
                  <div>Wilt u een <strong>wateraan- en afvoer</strong> in de container?</div>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="250">Ja</button>
                </div>
                <div class="col-xs-6 col-sm-2 question__box--content">
                  <button class="button question__button" data-value="0">Nee</button>
                </div>
              </div>
            </div>
          </div>


          <label class="field--label">OPMERKINGEN</label>
          <textarea name="description" class="field u-mb20" placeholder="Hallo, ik wil graag een offerte voor een container op maat..." rows="4"></textarea>

          <div class="row row-internalpadding">
            <div class="col-xs-12 col-sm-6">
              <label class="field--label">NAAM</label>
              <input name="name" type="text" class="field u-mb20" placeholder="Uw naam" required>
            </div>
            <div class="col-xs-12 col-sm-6">
              <label class="field--label">EMAIl</label>
              <input name="email" type="email" class="field u-mb20" placeholder="Uw email" required>
            </div>
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

  </div><!-- /.dialog -->

  <!-- <section class="section" style="background-color: #f3f8f3;">

    <? // snippet('curve', ['color' => '#f3f8f3']) ?>

  </section> -->

</div>

<div onclick="closeDialog();" class="" id="dialog_mask"></div>

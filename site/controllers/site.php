<?
return function($site, $pages, $page) {

  $offer_form_obj = uniform('contact-form', [
    'required' => [
      'naam' => '',
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'email',
        'to' => $site->user('daniel')->email(),
        'sender' => 'info@hipcontainers.nl',
        'subject' => '[' . $site->title()->html() . '] Offerte aanvraag: {naam}',
        'snippet' => 'email-offer'
      ]
    ]
  ]);

  return compact('offer_form_obj');
  
};
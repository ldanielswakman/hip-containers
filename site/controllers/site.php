<?
return function($site, $pages, $page) {

  $offer_form_obj = uniform('offer-form', [
    'required' => [
      'naam' => '',
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'log',
        'file' => './email.log'
      ],
      [
        '_action' => 'email',
        'to' => $site->user('daniel')->email(),
        'sender' => 'info@hipcontainers.nl',
        'subject' => '[' . $site->title()->html() . '] Offerte aanvraag: {naam}',
        'snippet' => 'email-offer'
      ],
      [
        '_action' => 'email',
        'to' => $site->user('nathal')->email(),
        'sender' => 'info@hipcontainers.nl',
        'subject' => '[' . $site->title()->html() . '] Offerte aanvraag: {naam}',
        'snippet' => 'email-offer'
      ],
    ]
  ]);

  $contact_form_obj = uniform('contact-form', [
    'required' => [
      'naam' => '',
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'log',
        'file' => './email.log'
      ],
      [
        '_action' => 'email',
        'to' => $site->user('daniel')->email(),
        'sender' => 'info@hipcontainers.nl',
        'subject' => '[' . $site->title()->html() . '] Bericht: {naam}',
        'snippet' => 'email-contact'
      ],
      [
        '_action' => 'email',
        'to' => $site->user('nathal')->email(),
        'sender' => 'info@hipcontainers.nl',
        'subject' => '[' . $site->title()->html() . '] Bericht: {naam}',
        'snippet' => 'email-contact'
      ],
    ]
  ]);

  return compact('offer_form_obj', 'contact_form_obj');
  
};
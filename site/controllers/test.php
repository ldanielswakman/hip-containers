<?
return function($site, $pages, $page) {

  $form = uniform('contact-form', [
    'required' => [
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'email',
        'to' => 'd.swakman@gmail.com',
        'sender' => 'info@hipcontainers.nl',
        'subject' => 'Test',
      ]
    ]
  ]);

  return compact('form');
  
};
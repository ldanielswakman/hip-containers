<?

return function($site, $pages, $page) {
  $form = uniform('offer-form', [
    'required' => [
      'name' => '',
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'email',
        'to' => 'me@example.com',
        'sender' => 'info@my-domain.tld',
        'subject' => 'New message from the contact form'
      ]
    ]
  ]);

  $test = 'testingggg';

  return compact('form', 'test');
};
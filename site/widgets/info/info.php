<?

return array(
  'title' => 'Styling info',
  'options' => array(
    // array(
    //   'text' => null,
    //   'icon' => 'pencil',
    //   'link' => 'link/to/option'
    // )
  ),
  'html' => function() {

    $content = '';
    $content .= 'Adding style to a text field via <br><strong>&lt;span class="c-green"&gt;</strong> text content... <strong>&lt;/span&gt;</strong>.<br><br>';
    $content .= '<span style="background-color: #fff; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-white<br>';
    $content .= '<span style="background-color: #f3f8f3; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-lightestgreen<br>';
    $content .= '<span style="background-color: #b2d9c7; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-lightgreen<br>';
    $content .= '<span style="background-color: #9bc4b1; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-green<br>';
    $content .= '<span style="background-color: #8bb09f; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-darkgreen<br>';
    $content .= '<span style="background-color: #626a82; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-darkblue<br>';
    $content .= '<span style="background-color: #4a4e59; display: inline-block; float: left; margin-right: 10px; width: 20px; height: 20px; border: 1px solid #eee;"></span> — c-darkgrey<br>';

    $content .= '<br>';

    $content .= '<span style="color: #ccc;">Button styles:</span><br>';
    $content .= '- button--primary<br>';
    $content .= '- button--outline<br>';
    $content .= '- button--white<br>';
    $content .= '- button--outline-white<br>';

    return $content;
  }
);
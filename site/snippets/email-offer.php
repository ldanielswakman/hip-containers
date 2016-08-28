<?

echo 'Offerte-aanvraag op de site hipcontainers.nl. We hebben het volgende ontvangen:<br><br>';

echo '<table border="0" cellpadding="5">';

foreach ($form as $field => $value) :

  if (str::startsWith($field, '_') && $field !== '_from') {
    continue;
  } else if ($field == '_from') {
    $field = 'email';
  }
  if (is_array($value)) {
    $value = implode(', ', array_filter($value, function($i) {
      return $i !== '';
    }));
  }

  if ($field == 'richtprijs') {
    echo '<tr><td>&nbsp;</td><td>————</td></tr>';
  }


  if ($field == 'opmerkingen') {
    echo '<tr><td>&nbsp;</td></tr>';
  }

  if (in_array($field, ['maat', 'afwerking', 'deur', 'raam', 'isolatie', 'licht', 'water', 'richtprijs']) && strlen($value) > 0) {
    $value = '<span style="color: #999;">€</span> ' . $value . ',-';
  }
  echo '<tr>';
  if ($field == 'richtprijs') {
    echo '<td><b>' . ucfirst($field) . '</b></td>';
    echo '<td><b>' . $value . '</b></td>';
  } else {
    echo '<td><i>' . ucfirst($field) . '</i></td>';
    echo '<td>' . $value . '</td>';
  }
  echo '</tr>';

endforeach;

echo '</table>';

echo '<br><br>';

echo '<span style="color: #999;">Voor meer informatie, neemt u gerust <a href="mailto:info@hipcontainers.nl">contact met ons op</a> of kijk verder op <a href="http://hipcontainers.nl/">hipcontainers.nl</a>.</span>';

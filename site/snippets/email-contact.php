<?

echo 'Bericht op de site hipcontainers.nl. We hebben het volgende ontvangen:<br><br>';

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

  echo '<tr>';
  echo '<td><i>' . ucfirst($field) . '</i></td>';
  echo '<td>' . $value . "</td>";
  echo '</tr>';

endforeach;

echo '</table>';

echo '<br>';

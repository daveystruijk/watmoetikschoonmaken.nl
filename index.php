<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$rooster = [
  'GR', 'Keuken', 'Badkamer Zolder', 'Badkamer'
];

$date = Carbon::now();
$weekNr = (int)$date->format('W');
$dayOfWeek = (int)$date->format('N');
$startOfWeek = $date->startOfWeek();


if ($dayOfWeek > 4) {
  $startOfWeek->addWeeks(1);
  $weekNr++;
}


?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Wat moet ik schoonmaken???</title>
  <meta name="author" content="Davey Struijk">

  <link rel="stylesheet" href="styles.css?v=1.0">
</head>

<body>
<div id="container">
  <div id="block">
    <h1>Martin, Dave:</h1>
  </div>
<p>Week <?php echo $weekNr, ' (', $startOfWeek->format('Y-m-d'), ')'; ?></p>
</div>
</body>
</html>

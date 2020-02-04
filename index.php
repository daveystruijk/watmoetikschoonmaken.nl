<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$rooster = [
  'GR', 'Keuken', 'Badkamer Zolder', 'Badkamer'
];
$offset = 1;

$date = Carbon::now();
$weekNr = (int)$date->format('W');
$dayOfWeek = (int)$date->format('N');
$startOfWeek = $date->startOfWeek();


if ($dayOfWeek > 4) {
  $startOfWeek->addWeeks(1);
  $weekNr++;
}
$endOfWeek = $date->endOfWeek();

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Wat moet ik schoonmaken???</title>
  <meta name="author" content="Davey Struijk">

  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="styles.css?v=1.0">
</head>

<body>
<div id="container">
  <div class="block">
    <h3>Week <?php echo $weekNr, ' (', $startOfWeek->format('M d'), ' - ', $endOfWeek->format('M d'), ')'; ?></h3>
  </div>
  <div class="block">
    <h3>Stroetsja & Spoederjonkel</h3>
    <hr />
    <h1><?php echo $rooster[(0 + ($weekNr % 4) + $offset) % 4]; ?></h1>
  </div>
  <div class="block">
    <h3>Kok&sup2; & Bastaardkind</h3>
    <hr />
    <h1><?php echo $rooster[(1 + ($weekNr % 4) + $offset) % 4]; ?></h1>
  </div>
  <div class="block">
    <h3>Vlugge Japie & Gobljonkel</h3>
    <hr />
    <h1><?php echo $rooster[(2 + ($weekNr % 4) + $offset) % 4]; ?></h1>
  </div>
  <div class="block">
    <h3>Buurman & Buurman</h3>
    <hr />
    <h1><?php echo $rooster[(3 + ($weekNr % 4) + $offset) % 4]; ?></h1>
  </div>
  <audio src="./bling.mp3" autoplay loop>
</div>
</body>
</html>

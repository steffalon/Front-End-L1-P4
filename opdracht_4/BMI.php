<?php
if (!empty($_GET['gewicht'])){
  $gewicht = $_GET['gewicht'];
} else {
  $gewicht = null;
}
if (!empty($_GET['lengte_cm'])){
  $lengte = $_GET['lengte_cm'];
} else {
  $lengte = null;
}

function BMIcalc($gewicht,$lengte)
{
  if (empty($gewicht) || empty($lengte)) {
    echo "Voer alles in!";
  } else {
    if (is_numeric($gewicht) && is_numeric($lengte)) {
      $lengte_m = $lengte / 100;
      $bmi = round($gewicht / ($lengte_m * $lengte_m),1);
      echo "U heeft als score: " . $bmi . " en volgens de schaal van de bmi heeft ";
      switch ($bmi) {
        case $bmi < 18.5:
          echo "u ondergewicht.";
          break;
        case $bmi >= 18.5 and $bmi <= 25:
          echo "u normaal gewicht.";
          break;
        case $bmi >= 25 and $bmi <= 27:
          echo "u licht overgewicht.";
          break;
        case $bmi >= 27 and $bmi <= 30:
          echo "u matige overgewicht.";
          break;
        case $bmi >= 30 and $bmi <= 40:
          echo "u obesitas.";
          break;
        default:
          echo "u morbide obesitas.";
          break;
      }
    } else {
      echo "Gebruik geen letters!";
    }
  }
}
BMIcalc($gewicht, $lengte);
?>

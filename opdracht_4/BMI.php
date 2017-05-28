<?php
$gewicht = $_GET['gewicht'];
$lengte = $_GET['lengte_cm'];
function BMIcalc($gewicht,$lengte)
{
  if (empty($gewicht) || empty($lengte)) {
    echo "Voer alles in!";
  } else {
    $lengte_m = $lengte / 100;
    $bmi = round($gewicht / ($lengte_m * $lengte_m),1);
    switch ($bmi) {
      case $bmi < 18.5:
        echo "U geeft ondergewicht.";
        break;
      case $bmi >= 18.5 and $bmi <= 25:
        echo "U heeft normaal gewicht.";
        break;
      case $bmi >= 25 and $bmi <= 27:
        echo "U heeft licht overgewicht.";
        break;
      case $bmi >= 27 and $bmi <= 30:
        echo "U heeft matige overgewicht.";
        break;
      case $bmi >= 30 and $bmi <= 40:
        echo "U heeft obesitas.";
        break;
      default:
        echo "U heeft morbide obesitas.";
        break;
    }
  }
}
BMIcalc($gewicht, $lengte);
?>

<?php
if (isset($_GET['gewicht']) && isset($_GET['lengte'])) {
    $gewicht = $_GET['gewicht'];
    $lengte = $_GET['lengte'];
    if (!empty($lengte) && !empty($gewicht)) {
        if (is_numeric($lengte) && is_numeric($gewicht)) {
            BMIcalc($gewicht, $lengte);
        } else {
            echo 'helaas pindakaas. Geen Edpoints voor jou.';
        }
    } else {
        echo 'helaas pindakaas. Geen Edpoints voor jou.';
    }
} else {
    echo 'helaas pindakaas. Geen Edpoints voor jou.';
}

function BMIcalc($gewicht, $lengte)
{
    $lengte = $lengte / 100;
    $kwadraat = $lengte * $lengte;
    $bmi = $gewicht / $kwadraat;
    $bmi = round($bmi, 1);
    echo("Uw BMI bedraagt: " . $bmi . "<br/>");
    switch (true) {
        case ($bmi < 18):
            echo "<span style='color: blue;'><b>U lijdt aan ondergewicht!</b></span>";
            break;
        case ($bmi > 18 AND $bmi <= 25):
            echo "<span style='color: green'><b>U heeft een gezond gewicht!</b></span>";
            break;
        case ($bmi > 25 AND $bmi <= 27):
            echo "<span style='color: purple'><b>U heeft een licht overgewicht!</b></span>";
            break;
        case ($bmi > 27 AND $bmi <= 30):
            echo "<span style='color: yellow'><b>U heeft een matig overgewicht!</b></span>";
            break;
        case ($bmi > 30 AND $bmi <= 40):
            echo "<span style='color: orange'><b>U heeft een ernstig overgewicht!</b></span>";
            break;
        case ($bmi > 40):
            echo "<span style='color: red'><b>U heeft een ziekelijk overgewicht!</b></span>";
            break;
        default:
            echo "<span style='color: red'><b>Je bent zo dik, dat Javascript verstopt raakt!</b></span>";
            break;
    }
}
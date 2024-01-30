<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
date_default_timezone_set("Europe/Amsterdam");

$today = date("j F Y");
echo "vandaag is het: $today";

echo "<br>";

$yearday = date ("z");
echo "vandaag is het de $yearday dag";

echo "<br>";

$weekday = date ("w");
 echo "het is de $weekday van deze week";

 echo "<br>";


 $monthdays = date ("t");
 echo "er zitten $monthdays in maart";

echo "<br>";

$year = date ("L");

$var1 = "wel";
$var2 = "geen";

echo "2024 is een $var1 een schrikkeljaar";

?>

</body>
</html>
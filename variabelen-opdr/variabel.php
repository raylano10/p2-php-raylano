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

$yearday = date ("z")+1;
echo "vandaag is het de $yearday dag";

echo "<br>";

$monday = date ("l");
$day = date ("w");
echo"$monday is de $day ste dag van de week";


 echo "<br>";

 $month = date ("F");
 $monthdays = date ("t");
 echo "er zitten $monthdays in $month";

echo "<br>";


$year = date("Y");
$whatYear = date("L");



echo "$year is een";
if (
    $whatYear ==1
    )
    {
        echo "schrikkeljaar";
    }

    else {
        echo "geen schrikkeljaar";
        }

?>

</body>
</html>
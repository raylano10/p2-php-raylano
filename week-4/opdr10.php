<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $getal = 12;
    $optellen = 0;

 echo "waarde van getal : $getal";
 echo "<br>";
 echo "optelling is als volgt";

 for ( $i = 0; $i <= $getal; $i++) {
    if ($i == $getal) {
        echo "$i =";
    } else {
        echo "$i + ";
    }
    $optellen += $i;
 }

 echo $optellen;
    ?>
</body>
</html>
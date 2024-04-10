<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$zijde1 = 12;
$zijde2 = 15;
$zijde3 = 20;

if
($zijde1 + $zijde2 > $zijde3 && $zijde1 + $zijde3 > $zijde2 && $zijde2 + $zijde3 > $zijde1) 
{
    echo "het kan";
}

else {
    echo "het kan niet";
}
?>
</body>
</html>
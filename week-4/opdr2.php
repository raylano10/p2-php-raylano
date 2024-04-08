<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    

$tijd = date ("H")*1;

$dagtijd = match ($tijd) {
   6, 7, 8, 9, 10, 11  => "ochtend",
   12, 13, 14, 15, 16, 17 => "middag",
   18, 19, 20, 21, 22, 23 => "avond",
   0, 1, 2, 3, 4, 5  => "nacht",
};

echo "het is op moment $dagtijd";

?>
</body>
</html>
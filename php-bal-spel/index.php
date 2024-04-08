<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numberOfBalls = random_int(1,10);

$sizehole = random_int(20,40);

$sizeBalls = random_int(1,2 * $sizehole);

$arrayBalls = array();

$numberFittingBalls= 0;

$maxNumberTries= 3;

for($i = 1; $i <= $numberOfBalls;  $i++)
{
    $arrayBalls[$i] = random_int(1, $sizeBalls);
}

$arrayBalls[0] = 0;

foreach ($arrayBalls as $sizeBalls)
{
    if($sizeBalls < $sizehole)
    {
        $numberFittingBalls ++ ;
    }
}

echo "<p>Welkom bij ons spel</p>";
echo "<p>in het spel zijn $numberOfBalls aanwezig. <br>";
echo "het gat is $sizehole groot. <br>";
echo "hoeveel ballen passen er doorheen?";

for($i = 1; $i <= $maxNumberTries; $i++ )
$userAnswer = random_int(0, $numberOfBalls);
if ($userAnswer <> $numberFittingBalls)
{ 
echo "<p> jouw antwoord was $userAnswer.<br>";
echo "je hebt fout geraden jammer <br>";
echo "het waren $numberFittingBalls passende ballen. </p>";
} else{ 
echo "<p>jouw antwoord was $userAnswer. <br>";
echo "goedzo je hebt het antwoord goed geraden. <br>";
echo "het antwoord was $numberFittingBalls. </p>";
}


?>

</body>
</html>
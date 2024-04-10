<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$usdRate = 1.21934;
$gbpRate = 0.915551;
$yenRate = 126.226;
$guldenRate = 2.18243;
 
echo "<table border='1'>";
echo "<tr>
<th>Euro</th>
<th>Amerikaanse dollar</th>
<th>Britse pond</th>
<th>Japanse Yen</th>
<th>Antilliaanse gulden</th>
</tr>";
 
for ($i = 1; $i <= 10; $i++) {
  echo "<tr>";
  echo "<td>$i</td>";
 
  $usd = $i * $usdRate;
  $gbp = $i * $gbpRate;
  $yen = $i * $yenRate;
  $gulden = $i * $guldenRate;
 
  echo "<td>$usd</td>";
  echo "<td>$gbp</td>";
  echo "<td>$yen</td>";
  echo "<td>$gulden</td>";
 
  echo "</tr>";
}
 
echo "</table>";
?>
</body>
</html>
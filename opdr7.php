<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $prijs = 1000; 

    $geld = 600; 

    $teweinig = $prijs - $geld; 


    if
     ($teweinig > 250)

    { 
    echo "zoek een betere job. Tekort: €$teweinig"; 
    } 
    else
    
    if
     ($teweinigt<= 250 && $teweinig> 0) 

    { 
    echo "bijna , je hebt nog €$teweinig teweinig"; 
    } 
    else
    { 
        $wissel = $geld - $prijs; 

        echo "je hebt nog €$wissel euro over."; 
    }
?> 

</body>
</html>
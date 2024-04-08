<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $tijd = date ("H");

        if (
                 $tijd >= 6 && $tijd < 12
            )
                { 
                 $dagtijd = "Ochtend";
                }
      else  

        if (
                $tijd >= 12 && $tijd < 18
            )
                { 
                $dag = "Middag"; 
                } 
     
     else

     if (
            $tijd >= 18 && $tijd < 24
        )
            {     
             $dagtijd = "Avond"; 
            } 
     
     else

     if (
            $tijd >= 0 && $tijd < 6
        )
            { 
             $dagtijd = "Nacht"; 
            } 

            echo "Het is nu $dagtijd"
?>
</body>
</html>
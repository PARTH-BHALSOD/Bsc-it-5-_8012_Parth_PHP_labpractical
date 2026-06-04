<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo"<h1>Arithmatic Operator</h1>";
        $a = 10;
        $b = 8;
        $c = $a+$b;
        echo $c."<br>";
        $c = $a-$b;
        echo $c."<br>";
        $c = $a*$b;
        echo $c."<br>";
        $c = $a**$b;
        echo $c."<br>";
        $c = $a/$b;
        echo $c."<br>";
        $c = $a%$b;
        echo $c."<br>";

        echo"<h1>Assignment Operator</h1>";
        $a+=1;
        echo $a."<br>";
        $b-=9;
        echo $b."<br>";
        $c/=2;
        echo $c."<br>";
        $c*=5;
        echo $c."<br>";


        
    ?>
</body>
</html>
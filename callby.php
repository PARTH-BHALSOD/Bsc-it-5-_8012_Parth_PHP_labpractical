<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function value($c){
            $c++;
            echo "call by value in fuction :".$c."<br>";
        }

        function refe(&$c){
            $c++;
            echo"call by reference in fuction :".$c."<br>";
        }

        $a = 9;
        value($a);
        echo"call by value in outside :".$a."<br>";

        $b = 10;
        refe($b);
        echo"call by reference in outside :".$b."<br>";


    ?>
</body>
</html>
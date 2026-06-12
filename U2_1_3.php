<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $multi = array(
        array("Apple","Macbook","RS:100000"),
        array("Asus","Tuf","RS:50000"),
    );

    for($i=0;$i<2;$i++){
        for($j=0;$j<=2;$j++){
            echo $multi[$i][$j]."    ";
        } 
        echo "<br>";
    }
    ?>
</body>
</html>
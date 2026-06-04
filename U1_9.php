<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr = array('parth','rajubhai','cahman','jetho');

    $reverse = array_reverse($arr);

    foreach($reverse as $p){
    echo $p."<br>";
    }


    ?>
</body>
</html>
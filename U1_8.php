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

    foreach($arr as $p){
    echo $p."<br>";
    }

    $arr = array(
    "name" => "Parth",
    "city" => "Rajkot",
    "age"  => 20
    );

    foreach($arr as $key => $value){
        echo $key . " : " . $value . "<br>";
    }

    $arr = array(
    array("Parth", 20, "Rajkot"),
    array("Rahul", 22, "Ahmedabad"),
    array("Amit", 21, "Surat")
    );

    foreach($arr as $row){
        foreach($row as $value){
            echo $value . " ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>

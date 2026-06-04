<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = array("Apple", "Banana", "Mango");
        $array2 = array("Orange", "Grapes", "Pineapple");

        $mergedArray = array_merge($array1, $array2);

        foreach($mergedArray as $array){
            echo $array."<br>";
        }

    ?>
</body>
</html>
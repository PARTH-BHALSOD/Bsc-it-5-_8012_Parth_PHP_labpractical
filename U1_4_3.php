<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $currentMonth = 6;

        if($currentMonth == 1){
            echo "January";
        }
        elseif($currentMonth == 2){
            echo "February";
        }
        elseif($currentMonth == 3){
            echo "March";
        }
        elseif($currentMonth == 4){
            echo "April";
        }
        elseif($currentMonth == 5){
            echo "May";
        }
        elseif($currentMonth == 6){
            echo "June";
            if(true){
                echo "-6th,2026";
            }
        }
        else{
            echo"other month!";
        }



    ?>
</body>
</html>
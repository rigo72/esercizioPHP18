<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film = ["f1", "f2", "f3", "f4" , "f5"];

        echo "<select name='filmpreferito'>";
        foreach($film as $value){
            echo "<option>{$value}</option>";
        }
        echo "</select>";
    ?>
</body>
</html>
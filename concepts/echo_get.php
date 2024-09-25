<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo & Get in PHP</title>
</head>
<body>
    <form action="echo_get.php" method="get">
        <label>Enter radius:</label> <br>
        <input type="text" name="radius"> <br>
        <input type="submit" value="">
    </form>
</body>
</html>

<?php
    $radius = (int)$_GET["radius"];
    echo 2* $radius * 3.1415 
?>
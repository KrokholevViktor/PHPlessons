<?php 

require_once 'engine/math.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок по PHP</title>
</head>
<body>
    <?php

    include 'template/header.php';




    echo sum(1, 2);

    sum(3, 4);


    require 'template/footer.php';

    ?>
</body>
</html>
<?php
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/category.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       foreach($arrayMovie as $el) { 
        echo "$el->name è un film del $el->year_of_release diretto da $el->director. <br>";
     } 
     ?>
</body>
</html>



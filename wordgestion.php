<?php

$paragraph  = $_GET['paragraph'];
$censored = $_GET['censored'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php 
    echo $paragraph; 
    ?></p>
    <p><?php echo strlen($paragraph); ?></p>

    <p><?php 
    echo str_replace($censored, '***', $paragraph);
    ?></p>
    <p><?php echo strlen($paragraph); ?></p>

    
</body>
</html>
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
    $new_paragraph = str_replace($censored, '***', $paragraph);
    echo $new_paragraph;
    ?></p>
    <p><?php echo strlen($new_paragraph); ?></p>

    
</body>
</html>
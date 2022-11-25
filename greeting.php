<?php 
$paragraphe = $_GET["paragraphe"];
$badword = $_GET["badword"];
$censurement = "***";
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
    <h2>La frase da te inserita è:</h2>
    <p><?php echo $paragraphe; ?></p>
    <?php
    $lenght_paragraphe = strlen($paragraphe);
    ?>
    <small>
        Lunghezza caratteri frase: <?php echo $lenght_paragraphe; ?>
    </small>

    <h2>La parola da lei censurata è:</h2>
    <p><?php echo $badword; ?></p>
    
    <h2>La frase censurata è:</h2>
    <?php
    $new_paragraphe = str_replace("$badword", "$censurement", "$paragraphe");
    ?>
    <p><?php echo $new_paragraphe; ?></p>
    <?php
    $lenght_censured_paragraphe = strlen($new_paragraphe);
    ?>
    <small>
        Lunghezza caratteri frase censurata: <?php echo $lenght_censured_paragraphe; ?>
    </small>
</body>
</html>
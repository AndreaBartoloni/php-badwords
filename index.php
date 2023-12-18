<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $nome = "ciao" ?>
    <?php $cognome = "mondo" ?>
</head>
<body>

    <h1> <?php echo $nome ?> </h1>
    <h1> <?php echo $cognome . " php" ?> </h1>  <!-- il "." serve per concatenare  -->
    <h1> <?php echo "$cognome php" ?> </h1>  <!-- metodo alternativo al punto  -->
    
</body>
</html>
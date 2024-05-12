<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>titulo de el block</h1>";
    echo "<p>en algun lugar de Tejalpa cuyo nombre no quiero recordar</p>";
    $i = 0;
    for ($i=0; $i<10; $i++){
        echo $i." ";
    } 
    $o = 0;
    for ($o=1; $o<12; $o++){
        $o++;
        echo $o." ";
    }
    ?>
</body>
</html>
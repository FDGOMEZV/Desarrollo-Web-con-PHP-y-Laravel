<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina 03</h1>
    <?php 
        session_start();    
        $miNombre= $_SESSION['miNombre'];
        echo "Nombre: $miNombre"
    ?>
</body>
</html>
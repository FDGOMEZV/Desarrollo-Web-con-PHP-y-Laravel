<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <title>Calculo de sueldo</title>
</head>
<body style="width:400px">

<h1>Calculo del sueldo</h1>
   <?php include "configuracion.php";?>
    
    <form action='calculos.php' method='post'></form>

    <div class="form-group" >
        <label for='nombre'>Nombre</label>    
        <input type='text' class="form-control" id='nombre' name='nombre'>
        <small id="nombre" class="form-text text-muted">Nombre y Apellidos</small>
    </div> 
    
    <div class="form-group" >
        <label for='fecha'>Fecha de nacimiento</label>    
        <input type='date' class="form-control" id='fecha' name='fecha'>
        <small id="fecha" class="form-text text-muted">Seleccione la fecha correcta</small>
    </div> 

    <div class="form-group" >
    <label for='puestos'>Puestos</label>    
    <select name='puestos' id='puestos' class="form-control" >
    <?php
            for ($i=0;$i< count($puestos); $i++ ){
                $puesto = $puestos[$i]['descripcion'];
                echo "<option value='$i'> $puesto </option>";
            }    
    ?>
    </select>
    </div>


    </form>

</body>
</html>
<?php
    require('config.php');
    @$id = $_REQUEST['id'];
    $consultar = "SELECT * FROM contactos WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $consultar);
    while($row = mysqli_fetch_array($ejecutar)){
        $id = $row[0];
        $cliente = $row[1];
        $telefono = $row[2];
        $fechaRegistro = $row[3];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="control.php">
        
            <h2>Editar Contactos</h2>
            <div class="form-group">
                <label for="id" class="custom-control-label">Id</label>
                <input class="form-control" name="id"  aria-describedby="helpId" placeholder="" value="<?php echo $id;?>">
                
            </div>
            <div class="form-group">
                <label for="cliente" class="custom-control-label">Cliente</label>
                <input class="form-control" name="cliente"  aria-describedby="helpId" placeholder="" value="<?php echo $cliente;?>">
                
            </div>
            <div class="form-group">
                <label for="numero" class="custom-control-label">Número de Teléfono</label>
                <input class="form-control" name="numero" aria-describedby="helpId" placeholder=""" value="<?php echo $telefono;?>">
                
            </div>
            <div class="form-group">
                <label for="fechaRegistro" class="custom-control-label">Fecha de Registro</label>
                <input class="form-control" type = "datetime" name="fechaRegistro" aria-describedby="helpId" placeholder=""" value="<?php echo $fechaRegistro;?>">
                
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name = "btn_modificar">Modificar</button>
          
                <button type="submit" class="btn btn-danger" name = "btn_emilinar">Eliminar</button>
           
                <a href="index.php" class="btn btn-primary">Regresar</a>
                <a href="interfazUssuario.php" class="btn btn-secondary">Ver Interfaz de Usuario</a>
            </div>
        </form>
    </div>

</body>
</html>

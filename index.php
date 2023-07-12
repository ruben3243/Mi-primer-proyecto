<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="control.php">
        
            <h2>Registrar de Contactos</h2>
            <div class="form-group">
                <label for="cliente" class="custom-control-label">Cliente</label>
                <input class="form-control" name="cliente"  aria-describedby="helpId" placeholder="">
                
            </div>
            <div class="form-group">
                <label for="numero" class="custom-control-label">Número de Teléfono</label>
                <input class="form-control" name="numero" aria-describedby="helpId" placeholder=""">
                
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name = "btn_registrar">Registrar</button>
                <a href="interfazUssuario.php" class="btn btn-secondary">Ver Interfaz de Usuario</a>
            </div>
        </form>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Clientes</th>
                    <th>Número</th>
                    <th>Fecha de Registro</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <?php
                require('config.php');
                $sql = "SELECT * FROM contactos";
                $ejecutar = mysqli_query($conexion, $sql);
                while($fila = mysqli_fetch_array($ejecutar)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $fila[0]; ?></td>
                    <td><?php echo $fila[1]; ?></td>
                    <td><?php echo $fila[2]; ?></td>
                    <td><?php echo $fila[3]; ?></td>
                    <td> <a href="indexModificar.php?id=<?php  echo $fila[0]; ?>" name="id" class="btn btn-secondary">Editar</a></td>
                   
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>

</body>
</html>
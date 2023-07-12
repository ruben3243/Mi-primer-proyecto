<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="card-group">
    <?php
            require('config.php');
            $sql = "SELECT * FROM contactos";
            $ejecutar = mysqli_query($conexion, $sql);
            while($fila = mysqli_fetch_array($ejecutar)){
        ?>              
        <div class="card">
            <div class="card-body  bg-info text-dark">
            <h3 class="p-3 mb-2 bg-white text-dar">Mis contactos</h3>
                <img class="img-thumbnail" src="https://scontent.flim2-1.fna.fbcdn.net/v/t39.30808-6/252279797_253406543483484_8791292566219803462_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeEe444QwO38z8GATAXngwkIMgS9DMqpAVsyBL0MyqkBW_KAa1XA6AX2010LHocT0KIckDy3zZao6omFetBv40-D&_nc_ohc=C6rGvJZfcCQAX-dMPgd&_nc_ht=scontent.flim2-1.fna&oh=c20397692b4454b6860627928d921ede&oe=6190BC68" alt="">
                <br><br>
                <p class="card-text">Cliente: <?php echo $fila[1]; ?></p>
                <p class="card-text">Telefono: <?php echo $fila[2]; ?></p>
                <p >Fecha de Registro: <?php echo $fila[3]; ?></p>
            </div>
        </div>
        <?php
            }
        ?>
</div>
            
    
</body>
</html>
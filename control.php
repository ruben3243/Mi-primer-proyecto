<?php
    if(isset($_REQUEST['btn_registrar'])){
        require('config.php');
        $cliente = $_POST['cliente'];
        $numero = $_POST['numero'];

        $sql = "INSERT INTO contactos (cliente, numero) VALUES ('$cliente','$numero')";
        $ejecutar = mysqli_query($conexion,  $sql);

        if($ejecutar){
            header("Location: index.php");
        }
    }
    if(isset($_REQUEST['btn_modificar'])){
        require('config.php');
        $id = $_POST['id'];
        $cliente = $_POST['cliente'];
        $numero = $_POST['numero'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $sql = "UPDATE contactos SET cliente = '$cliente', numero = '$numero', fechaRegistro = '$fechaRegistro' 
                WHERE id = '$id'";
        $ejecutar = mysqli_query($conexion,  $sql);

        if($ejecutar){
            header("Location: index.php");
        }
    }
    if(isset($_REQUEST['btn_emilinar'])){
        require('config.php');
        $id = $_POST['id'];

        $sql = "DELETE FROM contactos WHERE id = '$id'";
        $ejecutar = mysqli_query($conexion,  $sql);

        if($ejecutar){
            
            header("Location: index.php");
        }
    }



?>
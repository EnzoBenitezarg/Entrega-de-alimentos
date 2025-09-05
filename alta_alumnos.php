<?php

include 'conexion.php';


    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    
    $sql = "INSERT INTO `alumnos` (`nombre`, `curso`, `edad`, `sexo`) VALUES ('$nombre', '$curso', '$edad', '$sexo')";

    $resultado = $conexion->query($sql);
    if ($resultado == true) {
       echo "Alumno registrado correctamente";
    } else {
       echo "Error al registrar el alumno";
    }
    
    ?>

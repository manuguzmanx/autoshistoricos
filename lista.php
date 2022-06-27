<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre,apellidopaterno,apellidomaterno,edad,sexo,direccion,nivelestudios
                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
mysqli_close($conexion);

while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Apellido paterno: " . $reg['apellidopaterno'] . "<br>";
    echo "Apellido materno: " . $reg['apellidomaterno'] . "<br>";
    echo "Edad: " . $reg['edad'] . "<br>";
    echo "Sexo: " . $reg['sexo'] . "<br>";
    echo "Direción: " . $reg['direccion'] . "<br>";
    echo "Nivel de estudios: " . $reg['nivelestudios'] . "<br>";
    echo "<hr>";
  }
?>


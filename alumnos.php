<html>

<head>
  <title>Formulario Alumnos</title>
</head>

<body>
  <?php

  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,apellidopaterno,apellidomaterno,edad,sexo,direccion,nivelestudios) values 
                  ('$_REQUEST[nombre]','$_REQUEST[apellidopaterno]','$_REQUEST[apellidomaterno]','$_REQUEST[edad]','$_REQUEST[sexo]','$_REQUEST[direccion]','$_REQUEST[nivelestudios]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Datos registrados exitosamente.";
  ?>
  </body>

</html>

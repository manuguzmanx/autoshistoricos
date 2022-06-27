<html>

<head>
    <title>Registro</title>
</head>

<body>
    <?php

    $conexion = mysqli_connect("localhost", "id15232139_manuuvgamg", "292903Lman__", "id15232139_sitioresponsivo") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "insert into registros(nombre,apellidopaterno,apellidomaterno,correo,contrasena) values 
                ('$_REQUEST[nombre]','$_REQUEST[apellidopaterno]','$_REQUEST[apellidomaterno]','$_REQUEST[correo]','$_REQUEST[contrasena]')")
    or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "Datos registrados exitosamente.";
    ?>
    </body>
</html>

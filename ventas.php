<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Autos históricos</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="estilos.css" />
	</head>
	<body>
		<div class="contenedorgeneral">
			<header class="header">
				<div class="logo">
                    <h1>Autos Históricos</h1> <br> <br>
                    <h2>VENTAS</h2>
				</div>
				<nav class="menu">
					<a href="index.html">Inicio</a>
					<a href="acercade.html">Acerca de</a>
					<a href="servicios.html">Servicios</a>
                    <a href="preguntasfrecuentes.html">Preguntas frecuentes</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="registrate.html">Registrate</a>
				</nav>
			</header>
            <main>
                <center>
                <article class="contenido-texto">
                    <hr> 
                <?php
                        $conexion = mysqli_connect("localhost", "id15232139_manuuvgamg", "292903Lman__", "id15232139_sitioresponsivo") or
                        die("Problemas con la conexión");

                        $registros = mysqli_query($conexion, "select modelo,anio,kilometraje,potencia,precio
                                            from ventas") or
                        die("Problemas en el select:" . mysqli_error($conexion));
                    mysqli_close($conexion);

                    while ($reg = mysqli_fetch_array($registros)) {
                        echo " <br> Modelo: " . $reg['modelo'] . "<br>";
                        echo "Año: " . $reg['anio'] . "<br>";
                        echo "Kilometraje: " . $reg['kilometraje'] . "KM<br>";
                        echo "Potencia: " . $reg['potencia'] . "HP<br>";
                        echo "Precio: " . "$".$reg['precio'] . "<br>  <br>";
                        echo "<hr>";
                        }
                ?>
                </article>
                </center>
            </main>
			<footer class="footer">
				<p>Todos los derechos reservados. © Elaborado por: Vargas Guzmán Luis Manuel</p>
			</footer>
		</div>
	</body>
</html>

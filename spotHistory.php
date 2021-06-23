<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

    <title>Últimas escuchas</title>
</head>

<body>
    <h1>Mis últimas escuchas</h1>
    <form action="history.php" method="post">
        <div class="container">
            <p>Número de canciones: <span id="songsNumber"></span></p>

            <div class="slidecontainer">
                <input type="range" min="1" max="50" value="25" class="slider" id="myRange" name="numSongs">
            </div>

        </div>
        <div class="contenidoPrincipal">
            <button type="submit" class="boton" value="Buscar">Buscar</button>
        </div>
    </form>



    <script src="js/slider.js"></script>
</body>
<?php
    session_start();

    $ip = $_SERVER['SERVER_ADDR'];

    $count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;
    $_SESSION['count'] = $count + 1;

    $show_headers = getenv("DEBUG_HEADERS");
    $date = date("d/m/Y h:i");

?>
<html>
<head>
<title>Saludador - UNDAV - Programación Distribuida II</title>
<link rel="shortcut icon" href="https://www.undav.edu.ar/general/recursos/adjuntos/1441.ico">
<style>
    body {
        font-family: arial, verdana, sans-serif;
        font-size: 12pt;
        background-color: #cacaca ;
        margin: auto;
        width: 1003px;
        height: 132px;
    }
    
    #header {
        width: 1003px;
        height: 132px;
        margin: auto;
        background: #2a3665 url("https://undav.edu.ar/general/recursos/adjuntos/25822.jpg") no-repeat;
        position: relative;
        padding: 5px;       
    }

    #contenido {
        width: 1003px;
        margin: auto;
        padding: 5px;
        overflow: hidden;
        background: #fff;
    }

    .tile {
        padding: 15px;
        font-size: 12pt; 
    }

    .tile div.data {
        font-weight: bold;
        color: green;
        font-size: 15pt;
    }   
</style>
</head>
<body>
<div id="header"></div>
<div id="contenido">
    <h3>Hola terrícola!</h3>
    <div id="intro">
        <p>Esto es una simple web hecha con amor <span style="color: red">❤️</span> en PHP para ver un par de conceptos de contenedores y escalabilidad horizontal de la materia Programación Distribuida II.</p>
    
        <p>Podés encontrar su código en este <a href="https://github.com/distribuida2/docker-saludador">repositorio</a></p>
    </div>
    <h3>Info</h3>
    <div id="info">
        <div class="tile">
            Día y hora
            <div class="data"><?= $date ?></div>
        </div>
        <div class="tile">
            La ip del web server es 
            <div class="data"><?= $ip ?></div>
        </div>
        <div class="tile">La cantidad de recargas es 
            <div class="data"><?= $count ?></div    >
        </div>
        <?php
        if ($show_headers) {
            echo "<br><br>";
            foreach (getallheaders() as $nombre => $valor) {
                echo "$nombre: $valor<br>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>





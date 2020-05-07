<?php
    ini_set('session.save_handler', 'redis');
    ini_set('session.save_path', "tcp://redis:6379");
    session_start();

    $ip = $_SERVER['SERVER_ADDR'];

    $count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;
    $_SESSION['count'] = $count + 1;


?>
<html>
<head>
<title>Saludador - UNDAV - Programación Distribuida II - <?= $ip ?></title>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
<?php

echo "Hola!<br><br>Hoy es: ".date("d/m/Y h:i");

echo "<br>";
echo "Server IP: $ip<br>";
echo "<br>Headers<br><br>";

echo "Reloads: <br>$count<br>";

foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor<br>";
}

?>

</body>
</html>





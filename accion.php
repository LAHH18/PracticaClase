<?php
$nombre = $_POST['name'];
$edad = $_POST['edad'];

echo "Hola $nombre , tienes $edad años";

if($edad>=18)
    echo "<p>$nombre puede votar</p>";
else
    echo "<p>$edad no puede votar</p>";
?>
<?php
$mysqli = new mysqli(
    "localhost", 
    "alberto", 
    "5005", 
    "php_crud"
);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
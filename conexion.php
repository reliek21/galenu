<?php

function conexion($galenu, $usuario, $pass) {
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$galenu", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
?>
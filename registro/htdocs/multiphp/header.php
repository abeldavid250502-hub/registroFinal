<?php
// Detecta si estamos en la carpeta raíz o dentro de formularios/sesiones
$rutaBase = "";

if (strpos($_SERVER['REQUEST_URI'], 'formularios') !== false ||
    strpos($_SERVER['REQUEST_URI'], 'sesiones') !== false ||
    strpos($_SERVER['REQUEST_URI'], 'bd') !== false) {
    $rutaBase = "../";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="<?= $rutaBase ?>multiphp/estilos.css">
</head>

<body>
<header>
    <nav>
        <a href="<?= $rutaBase ?>inicio.php">Inicio</a> |
        <a href="<?= $rutaBase ?>formularios/login.php">Login</a> |
        <a href="<?= $rutaBase ?>formularios/registro.php">Registro</a> |
        <a href="<?= $rutaBase ?>sesiones/dashboard.php">Dashboard</a> |
        <a href="<?= $rutaBase ?>sesiones/cerrar.php">Cerrar sesión</a>
    </nav>
</header>

<main>

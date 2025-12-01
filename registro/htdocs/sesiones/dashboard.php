<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../formularios/login.php");
    exit;
}
?>

<?php require "../multiphp/header.php"; ?>

<h1>Bienvenido, <?= $_SESSION["usuario"] ?></h1>

<a href="cerrar.php">Cerrar sesión</a>

<?php require "../multiphp/footer.php"; ?>

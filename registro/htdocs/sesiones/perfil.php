<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../formularios/login.php");
    exit;
}
?>

<?php require "../multiphp/header.php"; ?>

<h2>Mi perfil</h2>

<p>Usuario: <strong><?= $_SESSION["usuario"] ?></strong></p>

<?php require "../multiphp/footer.php"; ?>

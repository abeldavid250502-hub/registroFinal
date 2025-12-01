<?php require "../multiphp/header.php"; ?>

<h2>Operación exitosa</h2>

<?php
$mensaje = $_GET["msg"] ?? "";

if ($mensaje == "registrado") {
    echo "<p>✔ Usuario registrado correctamente.</p>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<p>Operación completada.</p>";
}
?>

<?php require "../multiphp/footer.php"; ?>

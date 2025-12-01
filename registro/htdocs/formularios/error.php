<?php require "../multiphp/header.php"; ?>

<h2>Error</h2>

<?php
$mensaje = $_GET["msg"] ?? "Ha ocurrido un error";

switch ($mensaje) {
    case "usuarioExiste":
        echo "<p>⚠ El usuario ya existe. Intenta con otro.</p>";
        break;

    case "credenciales":
        echo "<p>❌ Usuario o contraseña incorrectos.</p>";
        break;

    default:
        echo "<p>$mensaje</p>";
        break;
}
?>

<p><a href="login.php">Volver al login</a></p>

<?php require "../multiphp/footer.php"; ?>

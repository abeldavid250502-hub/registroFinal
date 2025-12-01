<?php require "../multiphp/header.php"; ?>

<h2>Registrar usuario</h2>

<form action="../sesiones/validar.php" method="post">
    <input type="hidden" name="accion" value="registrar">

    <label>Usuario:</label>
    <input type="text" name="usuario" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Registrar</button>
</form>

<?php require "../multiphp/footer.php"; ?>

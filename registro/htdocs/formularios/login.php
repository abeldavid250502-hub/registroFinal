<?php require "../multiphp/header.php"; ?>

<h2>Iniciar sesión</h2>

<form action="../sesiones/validar.php" method="post">
    <input type="hidden" name="accion" value="login">

    <label>Usuario:</label>
    <input type="text" name="usuario" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Entrar</button>
</form>

<?php require "../multiphp/footer.php"; ?>

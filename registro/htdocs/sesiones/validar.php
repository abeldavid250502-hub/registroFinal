<?php
session_start();
require "../bd/Bd.php";

$pdo = Bd::pdo();
$accion = $_POST["accion"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

if ($accion === "registrar") {

    $hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios(usuario, password) VALUES (?, ?)");
        $stmt->execute([$usuario, $hash]);
        header("Location: ../formularios/ok.php?msg=registrado");
    } catch (Exception $e) {
        header("Location: ../formularios/error.php?msg=usuarioExiste");
    }
    exit;
}

if ($accion === "login") {

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["usuario"] = $usuario;
        header("Location: dashboard.php");
    } else {
        header("Location: ../formularios/error.php?msg=credenciales");
    }
    exit;
}

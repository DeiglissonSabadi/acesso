<?php
session_start();
include 'usuarios.php';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
    $_SESSION['usuario'] = $usuario;
    header("Location: painel.php");
    exit();
} else {
    echo "<script>alert('Usuário ou senha incorretos'); window.location.href = 'index.html';</script>";
}
?>
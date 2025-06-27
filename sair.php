<?php
// Apaga o cookie "usuario_nome"
setcookie("usuario_nome", "", time() - 3600, "/"); // Expira o cookie

// Redireciona para a página de login
header("Location: login.php");
exit();
?>

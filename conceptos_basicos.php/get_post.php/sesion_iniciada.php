<?php
session_start();
require_once "./data_base/db.php";
if (
    isset($_SESSION['user_log']) &&
    !empty($_SESSION['user_log'])
){
    echo "WELCOME: {$_SESSION['user_log']['name']}";
} 
?>
<link rel="stylesheet" href="estilos.css">
<form action="index_post.php" method="post">
    <br>
    <input type="submit" value="Cerrar sesión">
</form>
<form action="" method="post">
    <input type="submit" value="Bloquear sesión">
</form>

<h1>MIS POST</h1>

<?php
foreach ($_blog as $pos){
    if ($pos["id"] == $_SESSION["user_log"]["id"]) {
        echo "Titulo: {$pos['title']} <br>";
        echo "Cuerpo: {$pos['body']} <br>";
    }
}
?>
<form action="crear_post.php" method="post">
<br>
    <input type="submit" value="Crear post">  
</form>
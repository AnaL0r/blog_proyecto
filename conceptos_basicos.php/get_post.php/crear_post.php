<h1>Crear Post</h1>
<form action="" method="POST">
    <input type="text" placeholder="Titulo">
    <br>
    <br>
    <textarea name="cuerpo" rows="2" cols="8" placeholder="Cuerpo" required></textarea>
    <br>
    <br>
    <input type="submit" value="Crear">
</form>
<?php
session_start();
require_once "./data_base/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = htmlspecialchars($_POST['title']);
    $cuerpo = htmlspecialchars($_POST['cuerpo']);

    // Crear un nuevo post asociado al usuario logueado
    $_blog[] = [
        "id" => $_SESSION["user_log"]["id"],
        "title" => $titulo,
        "body" => $cuerpo
    ];

    // Mostrar mensaje de confirmación o redirigir al usuario
    echo "Post creado exitosamente!";
}
?>

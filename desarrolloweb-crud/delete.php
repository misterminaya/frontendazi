<?php

include_once 'conexion.php';
$id = $_GET['id'];
$sql = 'DELETE FROM producto WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
    'id' =>$id
]);

header("Location:lista.php");


?>
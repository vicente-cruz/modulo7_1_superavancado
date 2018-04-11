<?php
$pdo = new PDO('mysql:host=localhost;dbname=projeto_usuarios','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];

$query = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
$query->bindValue(':id',$id);
$query->execute();

?>
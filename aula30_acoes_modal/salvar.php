<?php
$pdo = new PDO('mysql:host=localhost;dbname=projeto_usuarios','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
$query->bindValue(':nome',$nome);
$query->bindValue(':email',$email);
$query->bindValue(':senha',md5($senha));
$query->bindValue(':id',$id);
$query->execute();

?>
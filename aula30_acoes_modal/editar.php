<?php
sleep(1);

$id = $_POST['id'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=projeto_usuarios','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
}
catch(PDOException $e) {
    echo "ERROR:".$e->getMessage();
    exit;
}

$query = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
$query->bindValue(':id',$id);
$query->execute();

if ($query->rowCount() > 0) {
    $usuario = $query->fetch();
?>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" /><br/><br/>
    
    E-mail:<br/>
    <input type="text" name="email" value="<?php echo $usuario['email']; ?>" /><br/><br/>
    
    Senha:<br/>
    <input type="text" name="senha" value="<?php echo $usuario['senha']; ?>" /><br/><br/>
    
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" />
    
    <input type="submit" value="Salvar" />
</form>
<?php
}
?>
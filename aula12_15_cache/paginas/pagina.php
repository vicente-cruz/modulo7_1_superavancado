<?php 
/**<html>
    <head>
        <title>Página teste</title>
    </head>
    <body>
        <div style="width:300px;margin:auto;background-color:#999;padding:50 40 50 20;">
            <h1>Este eh um cabecalho <?php echo rand(0, 9999); ?> </h1>
            <form method="POST">
                <input type="text" placeholder="E-mail" /><br/><br/>
                
                <input type="password" placeholder="Senha" /><br/><br/>
                
                <input type="submit" value="Entrar" />
            </form>
        </div>
    </body>
</html>
 * 
 */
?>
<html>
    <head>
        <title>Página teste</title>
    </head>
    <body>
        <?php
        try {
            $pdo = new PDO("mysql:dbname=curso_php;host=localhost;","root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT * FROM usuarios";
            $query = $pdo->query($sql);
            if ($query->rowCount() > 0) {
                foreach ($query->fetchAll() as $usuario) {
                    $cor = rand(0, 999999);
                    $len = rand(0, 100);
                    ?>
                    <div style="width:250px;float:left;margin:20px;background-color:<?php echo $cor; ?>;padding:20px">
                        <strong><?php echo $usuario['email']; ?></strong>
                        <?php echo substr($usuario['nome'],0,$len); ?>
                    </div>    
                    <?php
                }
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
        ?>
    </body>
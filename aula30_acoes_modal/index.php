<?php
$pdo = new PDO('mysql:dbname=projeto_usuarios;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $pdo->query("SELECT * FROM usuarios");
$usuarios = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container-fluid">
            <h1>Usuários</h1>
            
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($usuarios as $usuario): ?>
                <tr
                    data-nome="<?php echo $usuario['nome']; ?>"
                    data-email="<?php echo $usuario['email']; ?>"
                    data-senha="<?php echo $usuario['senha']; ?>"
                    data-id="<?php echo $usuario['id']; ?>">
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['senha']; ?></td>
                    <td>
<!--                        <a href="javascript:;" class="btn btn-info" onclick="editar('<?php echo $usuario['id']; ?>')">Editar</a>-->
                        <a href="javascript:;" class="btn btn-info" onclick="editar(this)">Editar</a>
                        <a href="javascript:;" class="btn btn-danger" onclick="excluir('<?php echo $usuario['id']; ?>')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            
            <div id="modal-editar" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="POST">
                                Nome:<br/>
                                <input type="text" name="nome" /><br/><br/>

                                E-mail:<br/>
                                <input type="text" name="email" /><br/><br/>

                                Senha:<br/>
                                <input type="text" name="senha" /><br/><br/>

                                <input type="hidden" name="id" />

                                <input type="submit" value="Salvar" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">...</div>
                    </div>
                </div>
            </div>
            
        </div>
        <script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
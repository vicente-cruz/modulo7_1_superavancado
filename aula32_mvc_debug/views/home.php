<h1>Página HOME</h1>
<h2>Mostrando usuários</h2>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
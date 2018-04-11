<?php if (isset($mensagem) && ( ! empty($mensagem))): ?>
<div class="alert <?php echo $estilo; ?>"><?php echo $mensagem; ?></div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['email']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<ul class="pagination">
    <?php for ($q = 1; $q<=$paginas; $q++) :?>
    <li <?php echo ($p == $q ? "class='active'" : ""); ?>>
        <a href="<?php echo BASE_URL; ?>?p=<?php echo $q; ?>"><?php echo $q; ?></a>
    </li>
    <?php endfor; ?>
</ul>


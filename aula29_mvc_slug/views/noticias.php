<h1>Notícias</h1>
<?php if (isset($mensagem)): ?>
<div class="alert <?php echo ( $status ? "alert-success" : "alert-danger"); ?>"><?php echo $mensagem; ?></div>    
<?php endif; ?>
<h2>Existem <?php echo $total_noticias; ?> notícias</h2>
<ul class="list-group">
    <?php foreach($noticias as $noticia): ?>
    <li class="list-group-item">
        <a href="<?php echo BASE_URL; ?>noticias/ver/<?php echo $noticia['slug']; ?>"><?php echo $noticia['titulo']; ?></a>
    </li>        
    <?php endforeach; ?>
</ul>
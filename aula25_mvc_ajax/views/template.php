<!--Aula 06-->
<html>
    <head>
        <title>Titulo do site</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    </head>
    <body>
        <h1>Topo do Site</h1>
        
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        
        <h1>Rodape do Site</h1>
        <script type="text/javascript" src="../../../assets/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
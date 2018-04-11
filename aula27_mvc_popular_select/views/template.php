<!--Aula 06-->
<!DOCTYPE html>
<html>
    <head>
        <title>Titulo do site</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    </head>
    <body>
        <h1>Topo do Site</h1>
        
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        
        <h1>Rodape do Site</h1>
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
        <script type="text/javascript" src="../../../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
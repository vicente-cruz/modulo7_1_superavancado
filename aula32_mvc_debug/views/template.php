<!DOCTYPE html>
<html>
    <head>
        <title>Aula 32 - MVC com Debug</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand">DEBUG em MVC</span>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o fa-lg"></i> Conteúdo</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <?php $this->loadViewInTemplate($viewName,$viewData); ?>
        </div>
        <script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
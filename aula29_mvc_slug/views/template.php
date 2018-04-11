<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <title>MVC com SLUG</title>
        <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand">SLUG em MVC</span>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo BASE_URL; ?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>noticias"><i class="fa fa-newspaper-o fa-lg"></i> Noticias</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        <script type="text/javascript">var BASE_URL = "<?php echo BASE_URL; ?>";</script>
        <script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
<html>
<head>
    <title>HARDIF</title>
    <base href="<?= BASE_URL ?>">
    
<link href="./publico/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./publico/css/app.css">
</head>
<body>
    <?php require "visao/cabecalho.php"; ?>

    <?php alertComponentRender(); ?>

    <main class="container">
        <?php require $viewFilePath; ?>
    </main>
    <?php
    require 'rodape.php';
    ?>
    <script type="text/javascript" src="./publico/js/jquery.mask.js"></script>
    <script type="text/javascript" src="./publico/js/jquery-3.3.1.min.js"></script> 
    <script src="./publico/js/bootstrap.min.js"></script>
</body>
</html>

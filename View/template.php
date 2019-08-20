<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/mainCool.css">
    <title><?=$title?></title>
</head>

<body>
    <?php
    // require_once('view/navbarBootstrap.php');
    // require_once('view/navbarConnect.php');
    require_once('view/navbar.php');?>
    <?=$content?>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>
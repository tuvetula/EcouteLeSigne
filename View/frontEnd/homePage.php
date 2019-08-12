<?php
$title='Page d\'accueil';
ob_start();
?>
<h1>Ecoute Le Signe</h1>



<?php
$content=ob_get_clean();
require('view/template.php');
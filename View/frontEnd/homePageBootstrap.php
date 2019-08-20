<?php
$title='Page d\'accueil';
ob_start();
?>

<div class="container">
    <!-- Carroussel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/Picture1" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/Picture1" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/Picture1" alt="Third slide">
            </div>
        </div>
    </div>
</div>


<?php
$content=ob_get_clean();
require('view/template.php');
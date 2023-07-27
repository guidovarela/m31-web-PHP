<?php 
$titulo="Home";
include("head.php") ?>

<body>
    
    <?php include("header.php") ?>
    
    <?php include("sliderHome.php") ?>
    

    <div class="container mt-5">
        <div class="titleNosotros text-center mb-4" data-aos="fade-up">
            <h2 class="titles color-basic">Nosotros</h2>
        </div>
        <div class="row justify-content-center gx-5" data-aos="fade-up">
            <div class="col-md-4 d-none d-sm-block">
                <div class="imgTop">
                    <img class="img-fluid w-md-100 rounded" src="img/prensa1.jpg" alt="Prensa M31">
                </div>
            </div>
            <div class="col-md-4">
                <p class="pTop titles fs-3">
                    <strong class="text-bold">M31 Electrónica</strong>, es una empresa argentina de una trayectoria de mas de quince años en el mercado de la Radiodifusión y de las Comunicaciones.
                </p>
            </div>
        </div>
    </div>

    <?php include("separador-elipsis.php") ?>

    <div class="container my-5">
        <div class="row gx-3" data-aos="fade-up">
            <div class="col">
                <div class="img">
                    <img src="img/prensa5.jpg" class="img-fluid rounded" alt="Prensa M31">
                </div>
            </div>
            <div class="col">
                <div class="content text-bold">
                    <p>
                        Desde hace mas de 25 años ofrecemos soluciones para los radiodifusores, en el campo de la transmision, transporte de señal y procesamiento de audio.
                    </p>
                    <p>
                        Asi tambien se diseñan sistema intercomunicadores para cubrir requerimientos en el area de la telefonia
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="img">
                    <img src="img/prensa3.jpg" class="img-fluid rounded" alt="Prensa M31">
                </div>
            </div>
        </div>
    </div>



    <?php include("footer.php") ?>
    
    <?php include("endSite.php") ?>

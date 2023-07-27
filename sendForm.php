<?php 
$titulo="Consulta";
include("head.php")
?>

<body>
    
    <?php include("header.php") ?>
    
    <div class="container-fluid headerContacto">
        <div class="container position-relative">
            <div class="mainTitle">
                <h2><?php echo $titulo ?></h2>
            </div>
        </div>
    </div>
    
    <?php include("separador-elipsis.php") ?>

    <div class="container mb-5">
        <div class="row gx-5 justify-content-center text-bold mt-5" data-aos="fade-up">
            <div class="col-lg-4 ">
                <div class="data rounded text-white bg-basic p-2 px-3 mb-2">
                    <div class="data title mb-3">
                        <span class="fw-bold fs-3 ">M31 Electrónica S.R.L.</span>
                    </div>
                    <div class="data-location mb-3">
                        <i class="fa-solid fa-location-dot fs-4 mx-1"></i>
                        <span class="fs-6 fw-light">
                            Espora 3770, Villa Lynch (B1672AUD) Buenos Aires, Argentina
                        </span>    
                    </div>
                    <div class="data-tel mb-3">
                        <span class="fs-6 fw-light">
                            <i class="fa-solid fa-phone fs-4 mx-1"></i>
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="tel:4753-3743">
                            (54-11) 4753-3743
                            </a>
                            /
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="tel:4754-6452">
                            (54-11) 4754-6452
                            </a>
                        </span>            
                    </div>
                    <div class="data-mail mb-3">
                        <span class="fs-6 fw-light">
                        <i class="fa-solid fa-envelope fs-4 mx-1"></i>
                            <a class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:m31@m31electronica.com.ar">m31@m31electronica.com.ar</a>
                        </span>

                    </div>
                </div>
                <div class="mapaGoogle">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.587184220293!2d-58.526366088651784!3d-34.58931067284665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7bb3c9f5221%3A0x50c6480a6ab8d211!2sM31%20Electr%C3%B3nica!5e0!3m2!1ses!2sar!4v1690428182977!5m2!1ses!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="respuestaForm border border-info rounded">

                    <?php

                    // set the default timezone to use.
                    date_default_timezone_set('UTC');

                    $nombre = $_POST['nombre'];
                    $email =  $_POST['email'];
                    $asunto =  $_POST['asunto'];
                    $mensaje = $_POST['mensaje'];

                    $destinatario = "guido.varela@gmail.com";
                    $fechaEnvio = date("d-m-Y H:i");
                    // asunto
                    $cuerpoMensaje = "<p>Nombre: ".$nombre."<br> Email: ".$email."<br> Mensaje: ".$mensaje."</p>Enviado el ".$fechaEnvio;

                    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
                    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    // Cabeceras adicionales
                    $cabeceras .= 'To:'.$destinatario;
                    $cabeceras .= 'From: '. $nombre.'<'.$email.'>' . "\r\n";

                    // 3) envio de datos
                    @$envio1 = mail($destinatario,$asunto,$cuerpoMensaje, $cabeceras);

                    // 4) Evaluacion del envio
                    if($envio1 === false){
                        echo "<span class='alert alert-success'>Gracias ".$nombre." por su mensaje. Nos podremos en contacto a la brevedad</span>";
                    } else{
                        echo "<span class='alert alert-danger'>Error en el envío.  Escribanos a ".$destinatario."</span>";
                    }  
                                
                    ?>
                
            </div>
                
            </div>
            
        </div>
    </div>


    <?php include("footer.php") ?>

    <!-- Form Validation -->
    <script src="js/validation.js"></script>
    
    <?php include("endSite.php") ?>
    

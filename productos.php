<?php 
$titulo="Productos";
include("head.php")
?>

<body>
    
    <?php include("header.php") ?>
    
    <div class="container-fluid headerProductos">
        <div class="container position-relative">
            <div class="mainTitle">
                <h2><?php echo $titulo ?></h2>
            </div>
        </div>
    </div>
    
    <?php include("separador-elipsis.php") ?>

    <div class="container mb-5">
    <i class="fa-solid fa-wrench fa-beat"></i>
    <h3 class="titles">
        en proceso...
    </h3>
    </div>


    <?php include("footer.php") ?>

    <!-- Form Validation -->
    <script src="js/validation.js"></script>
    
    <?php include("endSite.php") ?>
    

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
        <!-- <div class="provisorio">
            <i class="fa-solid fa-wrench fa-beat"></i>
            <h3 class="titles">
                en proceso...
            </h3>
        </div> 
    
    
    -->

    <div class="categorias">
        <?php
        //  Conexion mySQL
        include "conexionMySQL.php";
        mysqli_set_charset($conexion, "UTF8");
                
        // consulta Categorias
        $query1 = "SELECT * FROM categorias";
        $consulta1 = mysqli_query($conexion, $query1); 
        
        $cantidadResultados = mysqli_num_rows($consulta1);
        // if($cantidadResultados > 0 ){
        //     echo "<p class='alert alert-success'>Cantidad de resultados: ".$cantidadResultados."</p>";

        // }
        // else{
        //     echo "<p class='alert alert-danger'>No hay resultados.</p>";
        // }      

        for ($i=0; $i < $cantidadResultados ; $i++) { 
            
            $datos = mysqli_fetch_array($consulta1);
            
            echo '<a href="produtos.php?id='.$datos['id'].'"><span class="badge rounded-pill text-bg-secondary">'.$datos['nombreCategoria'].'</span></a>
            ';
        }

        
        // COnsulta Productos
        $query2 = "SELECT * FROM productos";
        $consulta2 = mysqli_query($conexion, $query2);

        $cantProductos = mysqli_num_rows($consulta2); 
        // echo $cantProductos;

        echo '<div class="row">';

        for ($i=0; $i < $cantProductos; $i++) { 
            $producto = mysqli_fetch_array($consulta2);
            echo '<div class="col-md-6 col-lg-4">';
                echo '<div class="card">';
                    echo '<img src="img/'.$producto["imagen"].'" class="card-img-top" alt="'.$producto["nombreProd"].'">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$producto["nombreProd"].'</h5>';
                        echo '<p class="card-text">'.$producto["descripcion"].'</p>';
                    echo '</div>';
                echo '</div>';    
            echo '</div>';    
            // echo $producto['nombreProd'];
            // echo $producto['descripcion'];
            // echo $producto['imagen'];
            
        }       
        echo '</div>'; //cierre .row    
        //liberamos la memoria de la consulta
        mysqli_free_result($consulta1);
        // cerrar la conexion
        mysqli_close($conexion);

        ?>
    
    </div>




    </div>


    <?php include("footer.php") ?>

    <!-- Form Validation -->
    <script src="js/validation.js"></script>
    
    <?php include("endSite.php") ?>
    

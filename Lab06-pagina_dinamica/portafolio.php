<!DOCTYPE html>
<html lang="en">
<?php 
include('funciones.php');
$xc = conectar();
//////HEADER///////
$sql = "SELECT * FROM header";
$res = mysqli_query($xc, $sql);
//////CATEGORIAS//////
$sql_cat = "SELECT * FROM categorias";
$res_cat = mysqli_query($xc, $sql_cat);
////// GRID ///////
$sql_grid = "SELECT * FROM grid";
$res_grid = mysqli_query($xc, $sql_grid);
////// FOOTER ///////
$sql_rs = "SELECT * FROM redes_sociales";
$res_rs = mysqli_query($xc, $sql_rs);
///// LOGIN ///////
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$sql_insertar = "INSERT INTO `portafolio`.`users` (`user`, `password`) VALUES ('$user', '$password');";
mysqli_query($xc, $sql_insertar);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1568b14259.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Portafolio Dinamico</title>
</head>

<body>

    <div class="contenedor">
        <header>
            <?php
            //session_start();
            echo 'holi '.$_POST['user'];
            ?>
            <div class="logo">
                <?php 
                while($filas=mysqli_fetch_array($res)){
                    if($filas['contenido'] == 'Portafolio'){
                        echo '<h1>'.$filas['contenido'].'</h1>';
                    }
                    elseif($filas['contenido'] == 'Desarrolles web junior'){
                        echo '<p>'.$filas['contenido'].'</p>';
                    }
                
                } ?> 
                 
            </div>
            <form action="">
                <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
            </form>
            <div class="categorias" id="categorias">
                <?php 
                while($filas=mysqli_fetch_array($res_cat)){
                    ///// Principal ////
                    if($filas['contenido'] == 'Todos'){
                        echo '<a href="#" class="activo">'.$filas['contenido'].'</a>';
                    }
                    else{
                        /////// Secciones //////
                        echo '<a href="#">'.$filas['contenido'].'</a>';
                    }
                }
                ?>
            </div>
        </header>
        <!--Grid de imagenes-->
        <section class="grid" id="grid">
            <!--
            Clase item para las imagenes
            Se seguira la estructura para poder usar la libreria en donde se agregan
            los contenidos (imagenes) dentro de un div.
            -->
            <?php 
             while($filas=mysqli_fetch_array($res_grid)){
                 echo '<div class="item" 
                 data-categoria="'.$filas['d_categ'].'" 
                 data-etiquetas="'.$filas['d_etique'].'" 
                 data-descripcion="'.$filas['d_descrip'].'">
 
                 <div class="item-contenido">
                     <img src="'.$filas['link'].'" alt="">
                 </div>
             </div>';
             }
            ?>
        </section>

        <section class="overlay" id="overlay">
            <div class="contenedor-img">
                <button id="btn-cerrar-popup"><i class="fa-solid fa-xmark"></i></button>
                <img src="" alt="">
            </div>
            <p class="descripcion"></p>
        </section>

        <!--Footer para colocar los iconos y el pie de pagina-->
        <footer class="contenedor">
            <div class="redes-sociales">
                <?php 
                while($filas=mysqli_fetch_array($res_rs)){
                    echo '<div class="contenedor-icono">
                    <a href="'.$filas['link'].'" target="_blank" class="'.$filas['tipo'].'">
                        <i class="'.$filas['icono'].'"></i>
                    </a>
                </div>';
                }
                ?>
            </div>
            <div class="creado-por">
                <p>Sitio diseñado por <a href="nosotros.html">Grupo 1</a> - <a href="nosotros.html">Desarrollo Web</a> - <a href="nosotros.html">Nosotros</a></a></p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

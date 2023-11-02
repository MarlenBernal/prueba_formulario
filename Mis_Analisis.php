<?php
ob_start();
session_start();
$id_Usuario=$_SESSION['id_usuario'];
$Nombre=$_SESSION['Nombre'];
if($id_Usuario=="" || $id_Usuario==null){
    header("location:index.html");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/Proximanete.css">
</head>
<body>
    <header>
        <div class="back">
            <div class="menu container">
                <a href="#" class="logo"><img class="logo_gis" src="img/Gsmall.webp" alt=""></a>
                <input type="checkbox" id="menu">
                <label for="menu">
                    <img src="img/menuahambuegesa.webp" alt="" class="menu-icono">
                </label>
                <nav class="Navbar">
                    <ul>
                        <li><a href="https://gisenalabs.com.mx/">Conocenos</a></li>
                        <li><a id="Nuevo_Analisis" href="#" onclick="Hacer_muestra();">Nuevo Análisis</a></li>
                        <li><a href="Mis_Analisis.php">Mis Análisis</a></li>
                        <li><a href="php/Cerrar.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--==================================================-->
    <Section class="Proximamente">
        <div class="Proximamente_Contenedor">
            <div class="Proximamente_Titulo">
                <h1>Próximamente</h1>
                <a class="Singin_Boton" href="Principal.php">Regresar Inicio</a>
            </div>
            <div class="Proximamente_Img">
                <img src="img/Proximamnete.webp" alt="proximamente_Imagens">
            </div>
        </div>
    </Section>

    <!--==================================================-->
    <footer calss="Footer">
        <div class="Fotter_Contenedor">
            <div class="Footer_Logo">
                <img  src="img/Smallfooterlogo.webp" alt="">
                <label for="Copyright">Gisenalabs® Todos los derechos reservados</label>
            </div>
        </div>
    </footer>
    
</body>
</html>

<script src="js/Orden_Muetra.js"></script>

<?php } ?>







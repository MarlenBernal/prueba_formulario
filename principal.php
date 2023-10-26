<?php 

ob_start();
    session_start();
    $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.html");
        }else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Principal.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <header class="header">

    </header>
    <Section class="Encabezado">
        <div class="Encabezado_Contenedor">
            <div class="Encabezado_Logo">
                <img src="img/Logo60px.png" alt="logo gisena">
                <h1>Bienvenido</h1>
                <a class="Boton" href="https://gisenalabs.com.mx/">Conosenos</a>
            </div>
            <div class="Encabezado_Muestras">
                <img src="img/analiziz.webp" alt="Imagen Analizis">
                <h1>Muestra</h1>
                <input class="Boton" type="submit" onclick="Hacer_muestra();" value="Nueva Muestra">
            </div>
        </div>
    </Section>
    
</body>
</html>

<script src="js/Orden_Muetra.js"></script>
<?php  }  ?>
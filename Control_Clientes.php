<?php 


ob_start();
    session_start();/*
    $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.html");
        }else{*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/control_cliente.css">
    <title>Control cliente</title>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <section class="Control">
        <div class="Control_contenedor" >
            <form class="Control_formulario" id="Control_Formulario">
                <div class="Control_titulo">
                    <h1>Control del cliente</h1>
                </div>
                <div class="Control_control">

                    <div class="dato">
                        <h2>IDENTIFICACION</h2>
                        <input type="text" name="identificacion" id="identificacion">
                    </div>

                    <div class="dato">
                        <h2>CANT</h2>
                        <input type="text" name="cantidad">
                    </div>
                    <div class="dato">
                        <h2>VARIEDAD</h2>
                        <input type="text" name="variedad">
                    </div>

                    <div class="dato">
                        <h2>NUM.LOTE</h2>
                        <input type="text" name="nolote">
                    </div>

                    <div class="dato">
                        <h2>NO.REGISTRO</h2>
                        <input type="text" name="noregistros">
                    </div>

                    <div class="dato_Boton">
                        <input type="button" value="Agregar Control" id="Actualizar_Tabla" onclick="registrar_Control();" >
                        <input type="button" value="Actualizar"  id="Actualizar_Tabla2">
                    </div>
                </div>
                <div class="Control_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Identificación</th>
                                <th>Cant.</th>
                                <th>Variedad</th>
                                <th>Num. Lote</th>
                            </tr>
                        </thead>
                        <tbody id="Tabla_Analisis">
                            
                        </tbody>
                    </table>
                </div>
                <div class="Control_enviar">
                <a class="BotonTerminarMuetra" href="orden_servicio.php">Terminar Muestra</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>


<script src="jsControl/Agregar_control.js"></script>
<script src="jsControl/Actualizar_Control.js"></script>
<?php /* } */ ?>
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/analisis_solicitados.css">
    <title>Analisis _solicitados</title>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <section class="Analisis">
        <div class="Analisis_Contenedor">
            <form class="Analisis_Formulario" id="Analisis_Form">
                <div class="Analisis_titulo">
                    <h1>ANÁLISIS SOLICITADOS</h1>
                </div>
                <div class="Analisis_laboratorios">
                    <h1>Laboratorios</h1>
                    <select id="Mostar_Lab" name="Laboratorio"></select>
                </div>

                <div class="Analisis_analisis">
                    <h1>Análisis</h1>
                    <div id="Ver_Analisis" class="Analisis_ver"></div>
                    <div class="Analisis_boton">
                        <input type="submit" value="Agregar análisis" id="Actualizar_Tabla" onclick="registrar_Analisis();">
                        <input type="submit" value="Actualizar tabla" id="Actualizar_Tabla2">
                    </div>
                </div>
                <div class="Analisis_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>CLAVE</th>
                                <th>ANALISIS</th>
                                <th>NORMA</th>
                                <th>UNIDAD</th>
                                <th>LAB</th>

                            </tr>
                        </thead>
                        <tbody id="Tabla_Analisis">
                            
                        </tbody>
                    </table>
                </div>
                <div class="Analisis_enviar">
                    <input type="button" value="Contro de Cliente" onclick="Conterolcliente();">
                </div>
            </form>
        </div>
    </section>
</body>

</html>

<script src="jsAnalisis/Mostrar_lab.js"></script>
<script src="jsAnalisis/Mostrar_Analisis.js"></script>
<script src="jsAnalisis/Agregar_Analisis.js"></script>
<script src="jsAnalisis/ActualizarAnalisis.js"></script>
<script src="jsAnalisis/cambiar.js"></script>

<?php /* } */?>
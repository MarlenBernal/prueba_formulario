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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texcoco datos de la muestra</title>
    <link rel="stylesheet" href="css/datos_muestra.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container">
        <form class="formu" id="Formulario_Muetra">
            <h1>Datos de Muestra</h1>
            <div class="men">
                <input type="checkbox" value="1" name="checkmensaje" id="check_mensajeria">
                <label for="mensaje">MENSAJERIA</label>
                <select class="mensajer" name="mensajeria" id="mensajeria" disabled></select>
            </div>

            <div class="no_guia">
                <label for="guias">No.DE GUIA(S):</label>
                <input  name="guias" class=noguia type="text" id="guias" disabled>
            </div>

            <div class="urgen">
                <label for="urgencia">URGENCIA:</label>
                <label type="number" class="urgencia" for="urgen">
                    <select name="urgen" id="urgen" class="urg"></select>
                </label>
                <label for="idioma">IDIOMA:</label>
                <label for="idioma" type="number">
                    <select name="idioma" class="idiom" id="idioma"></select>
                </label>
            </div>

            <div class="mues">
                <label for="muestra">MUESTRA:</label>
                <div class="mues_busca" id="muestra">
                    <input class="muest" type="text" name="muestra" id="campo">
                    <ul id="lista"></ul>
                </div>
                <input type="button" value="Nuevo">
            </div>

            <div class="canuni">
                <label for="cantidad">CANTIDAD:</label>
                <input id="cantidad" type="text" name="cantidad" class="cant">
                <label for="unidad">UNIDAD</label>
                <label for="unidad" type="number" class="cant">
                    <input type="text" name="unidad" id="campo_dic">
                    <ul id="lista_cli"></ul>
                </label>
            </div>

            <div class="fecha">
                <label for="fech_muestreo">FECHA DE MUESTREO:</label>
                <input type="date" class="fechm" id="Fecha_muetreo" name="Fecha_muetreo">

                <label for="fech_envio">FERCHA DE ENVIO:</label>
                <input type="date" class="feche"  name="fecha_envio">
            </div>
            <div class="fecha1">
                <label for="fech_caducidad">FECHA DE CADUCIDAD:</label>
                <input type="date" class="fechc" name="fecha_caducidad">

                <label for="fech_empaque">FECHA DE EMPAQUE:</label>
                <input type="date" class="fechem" name="fecha_empaque">
            </div>
            <div class="lotee">
                <label for="lote">LOTE:</label>
                <input type="text" class="lot" name="lote">
            </div>

            <div class="itti">
                <label for="item">ITEM:</label>
                <input type="text" class="ite" name="ittem">

                <label for="tif">TIF</label>
                <input type="text" class="ti" name="tif">
            </div>

            <div>
                <label for="proced_muestra">PROCEDENCIA DE LA MUESTRA</label>
            </div>

            <div class="proced">
                <label for="procedencia">PROCEDENCIA:</label>
                <label type="number">
                    <input type="text" class="proce" name="procedencia" id="campo_Proce">
                    <ul id="lista_proce"></ul>
                </label>
            </div>

            <div class="nomb">
                <label for="nombre">NOMBRE:</label>
                <input type="text" class="nom" name="nombre_procedencia">
            </div>

            <div class="municip">
                <label for="municipio">MUNICIPIO</label>
                <label type="text" >
                    <input type= text name="municipio" class="muni" id="municipio">
                </label>
            </div>

            <div class="estad">
                <label for="estado">ESTADO</label>
                <label type="number">
                    <input type="text"  name="estado" id="campo_esta">
                    <ul id="listaProce"></ul>
                </label>
                <label for="cop">C.P.</label>
                <label type="number">
                    <input type="text" name="cp" id="campo_codigo">
                    <ul id="listaCodigo"></ul>
                </label>
            </div>

            <div class="des_cliente">
                <label for="descrip_cliente">DESCRIPCION DEL CLIENTE</label>
                <input type="text" class="desc_cliente" name="descripcion_cliente">
            </div>

            <div class="otros_dat">
                <label for="otros_datos">OTROS DATOS</label>
                <input for="otros_datos" class="otros_dato" type="text" name="otros_datos">
            </div>

            <div class="motiv_cancel">
                <label for="motiv_cancel">MOTIVO DE CANCELACION</label>
                <input type="text" class="mot_cancel" name="motivo_cancelacion" disabled>
            </div>

            <div class="modific_can">
                <label for="modific">MODIFICACION O FALLO</label>
                <input type="text" class="modific_fallo" name="modificacion" disabled>
            </div>
            <div>
                <input type="submit" onclick="registrar_muestra();" value="Registar Muestra">
            </div>
        </form>
    </div>
</body>

</html>

<script src="jsMuestra/mensajeria.js"></script>
<script src="jsMuestra/muestras.js"></script>
<script src="jsMuestra/Procedencia.js"></script>
<script src="jsMuestra/estado_muestra.js"></script>
<script src="jsMuestra/Codigopostal.js"></script>
<script src="jsMuestra/Carcteres.js"></script>
<script src="jsMuestra/Orden_Muetra.js"></script>

<?php  } ?>
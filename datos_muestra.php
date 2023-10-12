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
</head>

<body>
    <div class="container">
        <form class="formu">
            <div class="men">
                <input type="checkbox" name="mensaje" id="check_mensajeria">
                <label for="mensaje">MENSAJERIA</label>
                <select class="mensajer" id="mensajeria" disabled></select>
                <button class="boton1">buscar</button>
                <button class="boton2">nuevo</button>
                <script src="js/jquery-3.2.1.min.js"></script>
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
                <button class="boton3">buscar</button>
                <button class="boton4">nuevo</button>
                <label for="idioma">IDIOMA:</label>
                <label for="idioma" type="number">
                    <select name="idioma" class="idiom" id="idioma">
                    </select>
                </label>
            </div>

            <div class="mues">
                <label for="muestra">MUESTRA:</label>
                <div name="muestra" class="mues_busca" id="muestra">
                    <input class="muest" type="text" name="cliente" id="campo">
                    <ul id="lista"></ul>
                </div>
                <input type="button" value="Nuevo">
            </div>

            <div class="canuni">
                <label for="cantidad">CANTIDAD:</label>
                <input id="cantidad" type="text" name="cantidad" class="cant">
                <label for="unidad">UNIDAD</label>
                <label for="unidad" type="number" class="cant">
                    <input type="text" name="direccion" id="campo_dic">
                    <ul id="lista_cli"></ul>
                </label>
                <button class="boton7">buscar</button>
                <button class="boton8">nuevo</button>
            </div>

            <div class="fecha">
                <label for="fech_muestreo">FECHA DE MUESTREO:</label>
                <input type="date" class="fechm">

                <label for="fech_envio">FERCHA DE ENVIO:</label>
                <input type="date" class="feche">
            </div>
            <div class="fecha1">
                <label for="fech_caducidad">FECHA DE CADUCIDAD:</label>
                <input type="date" class="fechc">

                <label for="fech_empaque">FECHA DE EMPAQUE:</label>
                <input type="date" class="fechem">
            </div>
            <div class="lotee">
                <label for="lote">LOTE:</label>
                <input type="text" class="lot">
            </div>

            <div class="itti">
                <label for="item">ITEM:</label>
                <input type="text" class="ite">

                <label for="tif">TIF</label>
                <input type="text" class="ti">
            </div>

            <div>
                <label for="proced_muestra">PROCEDENCIA DE LA MUESTRA</label>
            </div>

            <div class="proced">
                <label for="procedencia">PROCEDENCIA:</label>
                <label type="number">
                    <input type="text" class="proce" name="direccion" id="campo_Proce">
                    <ul id="lista_proce"></ul>
                </label>
                <button>buscar</button>
                <button>enviar</button>
            </div>

            <div class="nomb">
                <label for="nombre">NOMBRE:</label>
                <input type="text" class="nom">
            </div>

            <div class="municip">
                <label for="municipio">MUNICIPIO</label>
                <label type="text" >
                    <input type= text name="municipio" class="muni" id="municipio">
                    <button>buscar</button>
                </label>
            </div>

            <div class="estad">
                <label for="estado">ESTADO</label>
                <label type="number">
                    <select name="estado" class="esta" id="estado">
                        <option value="">Seleccione una opcion</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    <button>buscar</button>
                </label>
                <label for="cop">C.P.</label>
                <label type="number">
                    <select name="cop" class="cp" id="cop">
                        <option value="">Selecciona una opcion</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                    <button>buscar</button>
                </label>
            </div>

            <div class="des_cliente">
                <label for="descrip_cliente">DESCRIPCION DEL CLIENTE</label>
                <input type="text" class="desc_cliente">
            </div>

            <div class="otros_dat">
                <label for="otros_datos">OTROS DATOS</label>
                <input for="otros_datos" class="otros_dato" type="text" name="otros_datos">
            </div>

            <div class="motiv_cancel">
                <label for="motiv_cancel">MOTIVO DE CANCELACION</label>
                <input type="text" class="mot_cancel" disabled>
            </div>

            <div class="modific_can">
                <label for="modific">MODIFICACION O FALLO</label>
                <input type="text" class="modific_fallo" disabled>
            </div>
            <div>
                <label for="regis_por">REGISTRADO POR</label>
                <label type="number">
                    <select name="regis_por" class="regis" id="regis_por">
                        <option value="">Seleccione una opcion</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    <button>ACEPTAR</button>
                    <button>CANCELAR</button>
                    <button>LIMPIAR</button>
                    <LABEL>REGISTRO</LABEL>
                </label>
            </div>
        </form>
    </div>
</body>

</html>

<script src="jsMuestra/mensajeria.js"></script>
<script src="jsMuestra/muestras.js"></script>
<script src="jsMuestra/Procedencia.js"></script>
<?php  } ?>
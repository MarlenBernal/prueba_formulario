
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
    <section class="Formulario_Contenedor">
        <form class="Formulario_Muestra" id="Formulario_Muetra">
            <h1>Datos de Muestra</h1>
            <div class="Contenedor_Dato">
                <div class="Dato_Mensajeria">
                    <input type="checkbox" value="1" name="checkmensaje" id="check_mensajeria">
                    <label>Mensajería</label>
                    <select class="Mensajeria_Select" name="mensajeria" id="mensajeria" disabled></select>
                </div>
                <div class="Dato_Mensajeria">
                    <label>No. De guía:</label>
                    <input  name="guias" class="noguia" type="text" id="guias" disabled>
                </div>
            </div>
            

            <div class="Contenedor_Urgencia">
                <div class="Dato_Uregencia">
                    <label for="urgencia">Urgencia:</label>
                    <select name="urgen" id="urgen" class="urg"></select>
                </div>
                <div class="Dato_Uregencia">
                    <label for="idioma">Idioma:</label>
                    <select name="idioma" class="idiom" id="idioma"></select>
                </div>    
            </div>
            

            <div class="Contenedor_Muetra">
                <div class="Datos_Muestra">
                    <label for="muestra">Muestra:</label>
                    <div class="div_autocompletar">
                        <input class="muest" type="text" name="muestra" id="campo">
                        <ul id="lista"></ul>
                    </div>
                </div>

                <div class="Datos_Muestra">
                    <label for="cantidad">Cantidad:</label>
                    <input id="cantidad" type="text" name="cantidad" class="cant">
                    <label for="unidad">Unidad:</label>
                    <div class="div_autocompletar">
                        <input type="text" name="unidad" id="campo_dic">
                        <ul id="lista_cli"></ul>
                    </div>
                </div>
            </div>
            
            <div class="Contenedor_Fechas">
                <div class="Dato_Fechas">
                    <label for="fech_muestreo">Fecha de muestreo:</label>
                    <input type="date" class="fechm" id="Fecha_muetreo" name="Fecha_muetreo">

                    <label for="fech_envio">Fecha de envió:</label>
                    <input type="date" class="feche"  name="fecha_envio">
                </div>
                <div class="Dato_Fechas">
                    <label for="fech_caducidad">Fecha de caducidad:</label>
                    <input type="date" class="fechc" name="fecha_caducidad">

                    <label for="fech_empaque">Fecha de empaque:</label>
                    <input type="date" class="fechem" name="fecha_empaque">
                </div>
            </div>
            
            <div class="Contenedor_lote">
                <label for="lote">Lote:</label>
                <input type="text" class="lot" name="lote">
            </div>

            <div class="Contenedor_Item_Tif">
                <div class="Dato_Item_Tif">
                    <label for="item">ITEM:</label>
                    <input type="text" class="ite" name="ittem">
                </div>
                <div class="Dato_Item_Tif">
                    <label for="tif">TIF</label>
                    <input type="text" class="ti" name="tif">
                </div>
                
            </div>

            <div class="Procedencia_Muetra_Titulo">
                <h1>Procedencia de la muestra</h1>
            </div>

            <div class="Contededor_Procedencia">
                <div class="Dato_Procedencia">
                    <label for="procedencia">Procedencia:</label>
                    <div class="div_autocompletar">
                        <input type="text" class="proce" name="procedencia" id="campo_Proce">
                        <ul id="lista_proce"></ul>
                    </div>
                </div>
                <div class="Dato_Procedencia">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="nom" name="nombre_procedencia">
                </div>
                <div class="Dato_Procedencia">
                    <label for="municipio">Municipio:</label>
                    <input type= text name="municipio" class="muni" id="municipio">
                </div>
                <div class="Dato_Procedencia">
                    <div class="Estado_Dato">
                        <label for="estado">Estado:</label>
                        <div class="div_autocompletar">
                            <input type="text"  name="estado" id="campo_esta">
                            <ul id="listaProce"></ul>
                        </div>
                    </div>
                    <div class="Estado_Dato">
                        <label for="cop">C.P.</label>
                        <div class="div_autocompletar">
                            <input type="text" name="cp" id="campo_codigo">
                            <ul id="listaCodigo"></ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="Contenedor_Otros">
                <div class="Datos_Otros">
                    <label for="descrip_cliente">Descripcion del cliente:</label>
                    <input type="text" class="desc_cliente" name="descripcion_cliente">
                </div>

                <div class="Datos_Otros">
                    <label >Otros datos:</label>
                    <input for="otros_datos" class="otros_dato" type="text" name="otros_datos">
                </div>

                <div class="Datos_Otros">
                    <label for="motiv_cancel">Motivo de cancelación:</label>
                    <input type="text" class="mot_cancel" name="motivo_cancelacion" disabled>
                </div>

                <div class="Datos_Otros">
                    <label for="modific">Modificación o fallo:</label>
                    <input type="text" class="modific_fallo" name="modificacion" disabled>
                </div>
            </div>
            
            <div>
                <input type="submit" onclick="registrar_muestra();" value="Registar Muestra">
            </div>
        </form>
    </section>
</body>

</html>

<script src="jsMuestra/mensajeria.js"></script>
<script src="jsMuestra/muestras.js"></script>
<script src="jsMuestra/Procedencia.js"></script>
<script src="jsMuestra/estado_muestra.js"></script>
<script src="jsMuestra/Codigopostal.js"></script>
<script src="jsMuestra/Carcteres.js"></script>
<script src="jsMuestra/Orden_Muetra.js"></script>


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
    <title>Orden_servicio</title>
    <link rel="stylesheet" href="css/orden_servicio.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    
    <section class="Orden">
        <div class="Orden_Contenedor">
            <form class="Orden_Form" action="" method="post" autocomplete="off" id="Form_Orden">
                <h1>Nueva Orden de Servicio</h1>
                <div class="Orden_Grupo">
                    <div class="Orden_Dato">
                        <label>Número de Orden de Servicio:</label>
                        <input type="text" id="Buscar" name="Buscar" value="<?php $resp=$_SESSION['ordentrabajo']; echo $resp ?>" disabled>
                    </div>
                    <div class="Orden_Dato">
                        <label>Fecha:</label>
                        <input type="date" id="fecha" disabled>
                    </div>
                    <div class="check">
                        <input type="checkbox" checked disabled>
                        <label>Vigente</label>
                    </div>
                </div>
                <div class="Orden_Dato">
                    <label for="campo">Cliente:</label>
			        <input list="clientes_list" type="text" name="cliente" id="campo">
			        <datalist class="Lista_Clientes" id="lista"></datalist>
                </div>
                <div class="Orden_Dato">
                    <label>Razón Social:</label>
                    <input type="text" id="razonsocial" >
                </div>
                <div class="Orden_Dato">
                    <label>Dirección:</label>
                    <input list="lista_cl" type="text" name="direccion" id="campo_dic">
                    <datalist class="Lista_Clientes" id="lista_cli"></datalist>
                </div>
                <div class="Orden_Grupo">
                    <div class="Orden_Dato">
                        <label>Correo:</label>
                        <input list="lista_corro" type="text" id="Correo">
                        <datalist id="lista_correo"></datalist>
                    </div>
                    <div class="Orden_Dato">
                        <label>Teléfono:</label>
                        <input list="lista_tl " type="text" id="telefono">
                        <datalist id="lista_tel"></datalist>
                    </div>
                </div>
                <div class="Orden_Dato_check">
                    <div class="check">
                        <input type="checkbox" id="Dato_check">
                        <label>Representante:</label>
                    </div>
                    <select class="Select_Representante" id="Representante" name="representante" disabled ></select>
                </div>
                <div class="Orden_analisis">
                    <input type="button" value="Agregar Análisis" id="Enviar">
                    <input type="button" value="Actualizar Tabla" id="Actualizar">
                </div>
                <div class="Orden_Tabla">
                    <table class="Tabla_Orden">
                        <thead>
                            <tr>
                                <th>Act</th>
                                <th>Ord</th>
                                <th>Ver</th>
                                <th>Fir</th>
                                <th>Cap</th>
                                <th>Clave</th>
                                <th>Muestra</th>
                                <th>Estatus</th>
                                <th>F.Muestra</th>
                                <th>Caducidad</th>
                                <th>Cant</th>
                                <th>Lote</th>
                                <th>Envió</th>
                            </tr>
                        </thead>
                        
                        <tbody id="Datos_Tabla"></tbody>
                    </table>
                </div>
                <div id="Opciones_Envio">
                    <input type="submit" value="Enviar" id="Enviar_Orden">
                    <input type="button" value="Cancelar" onclick="Cancelar_Muestra();">

                </div>
            </form>
        </div>
    </section>

    <script src="js/ordenservicio.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/Tabla.js"></script>
    <script src="js/cliente_auto.js"></script>
    <script src="js/representante.js"></script>
    <script src="js/datos.js"></script>
    <script src="js/agregar_orden.js"></script>
    <script src="js/Actualizar_Tabla.js"></script>
    <script src="js/Cancelar_Muestra.js"></script>
    <script src="js/Enviar_Orden.js"></script>
</body>
</html>
<?php   } ?>
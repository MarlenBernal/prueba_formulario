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
                        <input type="text" id="Buscar" value="<?php $resp=$_SESSION['ordentrabajo']; echo $resp ?>" disabled>
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
			        <input type="text" name="cliente" id="campo">
			        <ul id="lista"></ul>
                </div>
                <div class="Orden_Dato">
                    <label>Razón Social:</label>
                    <input type="text" id="razonsocial" >
                </div>
                <div class="Orden_Dato">
                    <label>Dirección:</label>
                    <input type="text" name="direccion" id="campo_dic">
                    <ul id="lista_cli"></ul>
                </div>
                <div class="Orden_Grupo">
                    <div class="Orden_Dato">
                        <label>Correo:</label>
                        <input type="text" id="Correo">
                        <ul id="lista_correo"></ul>
                    </div>
                    <div class="Orden_Dato">
                        <label>Teléfono:</label>
                        <input type="text" id="telefono">
                        <ul id="lista_tel"></ul>
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
                <input type="submit" value="Enviar">
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
</body>
</html>
<?php  } ?>
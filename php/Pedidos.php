<?php 
ob_start();
    session_start();
    $salida="";
        $varSesion=$_SESSION["usuario"];
        $varId=$_SESSION["id"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.html");
        }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/Pedidos.css">
</head>
<body>
    <?php require('Global/cabesera.php'); ?>
    <!--================================================================================--> 
    <Section class="Titulo">
        <div class="Titulo_Contenedor">
            <div class="Titulo_Texto">
                <img src="img/LumarLogo.png" alt="logo">
                <div class="Texto_Logo">
                    <h1>Pedidos</h1>
                    <h2>Bienvenido</h2>
                </div>
            </div>
            <div class="Titulo_Descripcion">
                <div class="Titlo_H1">
                    <h1>¿Para que es el apartado</h1>
                    <h1 class="H1_Pedidos"> Pedidos ?</h1>
                </div>
                <p>Este apartado es para hacer pedidos en menudeo si se quieren hacer pedidos en mayoreo ve al apartado de pedidos especiales</p>
            </div>
        </div>
    </Section>

    <Section class="Contenedor_Todo">
        <Section class="Agregar_Pedido">
            <div class="Agregar_Pedido_Contenedor">
                <form class="Agregar_Form">
                    <label>No. de Pedido</label>
                    <input type="text"> 

                    <label>Tipo de Producto</label>
                    <Select></Select>
                    <label>Nombre de Producto</label>
                    <Select></Select>
                    <label>Cantidad de Productos</label>
                    <input type="number">
                    <label>Total Productos</label>
                    <input type="text" readonly>
                    
                </form>
                <form class="Carro">
                    <input type="text" value="<?php echo $varId?>" disabled>
                    <div class="Carro_Producto"></div>
                    <label class="Carrito_Total">$</label>
                </form>
            </div>
        </Section>

    </Section>
            
</body>
</html>

<?php  } ?>
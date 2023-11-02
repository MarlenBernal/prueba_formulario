$(document).ready(function(){
    $("#Enviar").click(function(){
        event.preventDefault();
        
        if ($('#Buscar').val() == "") {
            alert("Agrega No orden");
            return false;
        } else if ($('#campo').val() == "") {
            alert("Agrega Cliente");
            return false;
        }else if($('#razonsocial').val()==""){
            alert("Agrega Razon social");
            return false;
        }else if ($('#campo_dic').val()==""){
            alert("Agrega Direccion");
            return false;
        }else if($('#Correo')==""){
            alert("Agrega Correo");
            return false;
        }else if($('#telefono')==""){
            alert("Agrega Telefono");
            return false;
        }

        cadena="orden=" + $("#Orden_Trabajo").val()+"&fecha="+$("#Fecha_Orden").val()+"&cliente="+$("#Orden_Cliente").val()
        +"&razon="+$("#Orden_Razon").val()+"&direccion="+$("#Orden_Direcciones").val()+"&correo="+$("#Orden_Correo").val()
        +"&telefono="+$("#Orden_Telefono").val()+"&representante="+$("#Orden_Representante").val();

        $.ajax({
            type: "POST",
            url: "php/agregar_orden.php",
            data: cadena,
            success: function(res){
                if(res==1){
                    window.location.replace("datos_muestra.php");
                    alert ("Orden Realizada");
                    
                }else if(res==2){
                    alert("Orden de ya existe");
                }else{
                    alert(res);
                }
                
            }
        })

    });
});

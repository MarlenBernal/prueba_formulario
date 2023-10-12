
$(buscar_Tipo());

function buscar_Tipo(consulta){
    $.ajax({
        url:'php/representante.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#Representante').html(res)
    }).fail(function(){
        console.log(error);
    });
}

var checkbox = document.getElementById('Dato_check');
var select = document.getElementById('Representante');
checkbox.addEventListener('change', function() {
    select.disabled = !checkbox.checked;
});


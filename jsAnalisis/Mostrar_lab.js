$(buscar_Lab());

function buscar_Lab(consulta){
    $.ajax({
        url:'phpAnalisis/mostar_Lab.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#Mostar_Lab').html(res)
    }).fail(function(){
        console.log(error);
    });
}
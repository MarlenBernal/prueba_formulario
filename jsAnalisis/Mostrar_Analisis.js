$(document).ready(function(){
    $('#Mostar_Lab').val(1);
    recagarlista();

    $('#Mostar_Lab').change(function(){
        recagarlista();
    });
})

function recagarlista(){
    $.ajax({
        type:'POST',
        url:'phpAnalisis/Mostrar_Analisis.php',
        data:'tipo='+ $('#Mostar_Lab').val(),
        success:function(res){
            $('#Ver_Analisis').html(res);
        }
    });
}
//Mensajeria============================================================
$(buscar_Tipo());

function buscar_Tipo(consulta){
    $.ajax({
        url:'phpMuestar/Mensajeria.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#mensajeria').html(res)
    }).fail(function(){
        console.log(error);
    });
}

var checkbox = document.getElementById('check_mensajeria');
var select = document.getElementById('mensajeria');
var guia = document.getElementById('guias');
checkbox.addEventListener('change', function() {
    select.disabled = !checkbox.checked;
    guia.disabled = !checkbox.checked;
});

//Hurgencia============================================================
$(Hurgencia());

function Hurgencia(consulta){
    $.ajax({
        url:'phpMuestar/Urgencia.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#urgen').html(res)
    }).fail(function(){
        console.log(error);
    });
}

//idiomaa============================================================

$(Idioma());

function Idioma(consulta){
    $.ajax({
        url:'phpMuestar/Idioma.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#idioma').html(res)
    }).fail(function(){
        console.log(error);
    });
}

//Unidad============================================================

document.getElementById("campo_dic").addEventListener("keyup", getUnidad)

function getUnidad() {

    let inputC = document.getElementById("campo").value
    let listaD = document.getElementById("lista_cli");

    if (inputC.length > 0) {

        let url = "phpMuestar/unidad.php"
        let formData = new FormData()
        formData.append("campo", inputC)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listaD.style.display = 'block'
                listaD.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listaD.style.display = 'none'
    }
}

function mostrare(cpe) {
    let listaD = document.getElementById("lista_cli");
    listaD.style.display = 'none'
    document.getElementById("campo_dic").value = cpe;
}
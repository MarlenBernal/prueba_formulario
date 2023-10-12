document.getElementById("campo_codigo").addEventListener("keyup", getEstadoProce)

function getEstadoProce() {

    let inputproce = document.getElementById("campo_codigo").value;
    let listaCodigo = document.getElementById("listaCodigo");

    if (inputproce.length > 0) {

        let url = "phpMuestar/Codigopostal.php"
        let formData = new FormData()
        formData.append("campo_codigo", inputproce)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listaCodigo.style.display = 'block'
                listaCodigo.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listaCodigo.style.display = 'none'
    }
}

function mostrarcodigo(codigo) {
    let listaCodigo = document.getElementById("listaCodigo");
    listaCodigo.style.display = 'none';
    document.getElementById("campo_codigo").value = codigo;
}
document.getElementById("campo_esta").addEventListener("keyup", getEstadoProce)

function getEstadoProce() {

    let inputproce = document.getElementById("campo_esta").value;
    let listaproce = document.getElementById("listaProce");

    if (inputproce.length > 0) {

        let url = "phpMuestar/estado_muestra.php"
        let formData = new FormData()
        formData.append("campo_esta", inputproce)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listaproce.style.display = 'block'
                listaproce.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listaproce.style.display = 'none'
    }
}

function mostrarproce(cp) {
    let listaproce = document.getElementById("listaProce");
    listaproce.style.display = 'none'
    document.getElementById("campo_esta").value = cp;
}
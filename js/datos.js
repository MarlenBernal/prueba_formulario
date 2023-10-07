document.getElementById("campo_dic").addEventListener("keyup", getDomicilio)

function getDomicilio() {

    let inputC = document.getElementById("campo").value
    let listaD = document.getElementById("lista_cli");

    if (inputC.length > 0) {

        let url = "php/domicilio.php"
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
///_________TEL_____________________
document.getElementById("telefono").addEventListener("keyup", getTelefono)

function getTelefono() {

    let inputC = document.getElementById("campo").value
    let listaD = document.getElementById("lista_tel");

    if (inputC.length > 0) {

        let url = "php/telefono.php"
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

function mostel(cpe) {
    let listaD = document.getElementById("lista_tel");
    listaD.style.display = 'none'
    document.getElementById("telefono").value = cpe;
}

///_________Cor_____________________
document.getElementById("Correo").addEventListener("keyup", getCorreo)

function getCorreo() {

    let inputC = document.getElementById("campo").value
    let listaDc = document.getElementById("lista_correo");

    if (inputC.length > 0) {

        let url = "php/correo.php"
        let formData = new FormData()
        formData.append("campo", inputC)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listaDc.style.display = 'block'
                listaDc.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listaDc.style.display = 'none'
    }
}

function moscor(cpe) {
    let listaDc = document.getElementById("lista_correo");
    listaDc.style.display = 'none'
    document.getElementById("Correo").value = cpe;
}

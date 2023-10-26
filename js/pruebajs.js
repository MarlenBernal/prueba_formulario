document.getElementById("Representante").addEventListener("keyup", getRep)

function getRep() {

    let InputRep = document.getElementById("Representante").value
    let listarep = document.getElementById("Lista_Representantes")

    if (InputRep.length > 0) {

        let url = "php/pruebajs.php"
        let formData = new FormData()
        formData.append("Representante", InputRep)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listarep.style.display = 'block'
                listarep.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listarep.style.display = 'none'
    }
}

function mostrar(cp) {
    listarep.style.display = 'none'
    document.getElementById("Representante").value = cp;
    document.getElementById("razonsocial").value = cp;
}
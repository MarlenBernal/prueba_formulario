document.getElementById("campo_Proce").addEventListener("keyup", getProcedencia)

function getProcedencia() {

    let inputCPo = document.getElementById("campo_Proce").value
    let listao = document.getElementById("lista_proce")

    if (inputCPo.length > 0) {

        let url = "phpMuestar/Procedencia.php"
        let formData = new FormData()
        formData.append("campo_Proce", inputCPo)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                listao.style.display = 'block'
                listao.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        listao.style.display = 'none'
    }
}

function mostrarProce(cpaq) {
    let listao = document.getElementById("lista_proce")
    listao.style.display = 'none';
    document.getElementById("campo_Proce").value = cpaq;
}
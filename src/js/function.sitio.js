
document.addEventListener('DOMContentLoaded', function () {
    // TODO: mostrar preguntas de informacion
    if (document.querySelector('#accordion')){
        let ajaxUrl = base_url + "Sitio/getFaq"
        //creamos el objeto para os navegadores
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP')
        //abrimos la conexion y enviamos los parametros para la peticion
        request.open("POST", ajaxUrl, true)
        request.send()
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                //option obtenidos del controlador
                document.querySelector('#accordion').innerHTML = request.responseText
            }
        }
    }

    // TODO: mostrar team
    if (document.querySelector('#team')) {
        const xhr = new XMLHttpRequest()
        const method = "POST"
        const ajaxUrl = base_url + "Sitio/getTeam"
        xhr.open(method, ajaxUrl, true)
        xhr.onreadystatechange = () => {
            // In local files, status is 0 upon success in Mozilla Firefox
            if (xhr.readyState === XMLHttpRequest.DONE) {
                const status = xhr.status;
                if (status === 0 || (status >= 200 && status < 400)) {
                    // The request has been completed successfully
                    document.getElementById('team').innerHTML = xhr.responseText
                } 
            }
        }
        xhr.send()
    }

    // TODO: mostrar autoridades
    if (document.getElementById('autoridades')) {
        let ajaxUrl = base_url + "Sitio/getAutoridades"
        //creamos el objeto para os navegadores
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP')
        //abrimos la conexion y enviamos los parametros para la peticion
        request.open("POST", ajaxUrl, true)
        request.send()
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                //option obtenidos del controlador
                document.getElementById('autoridades').innerHTML = request.responseText
            }
        }
    }
})
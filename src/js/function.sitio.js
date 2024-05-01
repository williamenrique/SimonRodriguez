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
const formularioAdopcion = document.querySelector("#form-adopcion");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const telefono = document.querySelector("#telefono").value;
    const mascota = document.querySelector("#mascota").value;
    const motivo = document.querySelector("#motivo").value;

    if (nombre == "") {
        avisoPedido.textContent = "Falta tu nombre";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (correo.includes("@") == false) {
        avisoPedido.textContent = "El correo no parece correcto le falta el @";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (telefono == "") {
        avisoPedido.textContent = "Falta tu telefono";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (mascota == "Seleccione una opción") {
        avisoPedido.textContent = "Seleccione una mascota";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (motivo == "") {
        avisoPedido.textContent = "Escriba el motivo de la adopcion";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else {
        avisoPedido.textContent = "Solicitud registrada correctamente. Nos pondremos en contacto contigo para darte una respuesta.";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioAdopcion.addEventListener("submit", revisarPedido);
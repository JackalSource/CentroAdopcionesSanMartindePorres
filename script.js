const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = false;

function alternarModo(){
    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;

    if(esDeDia){
        botonModo.textContent = "🌖 Modo Noche"
    }else{
        botonModo.textContent = "🌞 Modo día"
    }
}
botonModo.addEventListener("click", alternarModo);


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
        avisoPedido.textContent = "Falta tu nombre.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (correo.includes("@") == false) {
        avisoPedido.textContent = "El correo no parece correcto. Le falta el @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (telefono == "") {
        avisoPedido.textContent = "Falta tu teléfono.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (mascota == "Seleccione una opción") {
        avisoPedido.textContent = "Seleccione una mascota.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else if (motivo == "") {
        avisoPedido.textContent = "Escriba el motivo de la adopción.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }

    else {
        avisoPedido.textContent = "Solicitud enviada correctamente. Nos pondremos en contacto contigo.";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioAdopcion.addEventListener("submit", revisarPedido);
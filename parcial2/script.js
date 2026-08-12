const formularioHelados = document.querySelector("#form-helados");
const avisoHelados = document.querySelector("#aviso-helados");

function revisarPedido(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const sabores = document.querySelector("#sabores").value;

    if (nombre == "" || correo == "") {

        event.preventDefault();

        avisoHelados.textContent = "Falta tu nombre o tu correo, debes llenar los campos para realiza pedido";
        avisoHelados.classList.add("error");
        avisoHelados.classList.remove("exito");

    } else if (correo.includes("@") == false) {

        event.preventDefault();

        avisoHelados.textContent = "El correo es incorrecto";
        avisoHelados.classList.add("error");
        avisoHelados.classList.remove("exito");

    } else {

        avisoHelados.textContent = "Pedido anotado - te atiende Mauricio Gustavo Aparicio Muñoz";
        avisoHelados.classList.add("exito");
        avisoHelados.classList.remove("error");

    }
}

formularioHelados.addEventListener("submit", revisarPedido);
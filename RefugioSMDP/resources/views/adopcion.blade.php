<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitud de Adopción</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>


<body>
    <header>
        <div class="encabezado">
            <img src="{{ asset('images/SMDP1.ico') }}" alt="Logo del refugio" class="logo">
            <div>
                <h1>Centro de Adopciones San Martin de Porres</h1>
                <p>Adopta hoy, Ama para siempre</p>
            </div>
        </div>
    </header>

    <nav>
    <a href="/">Inicio</a>
    <a href="/adopcion">Adopcion</a>
    <a href="/voluntariado">Voluntariado</a>
    <a href="/donaciones">Donaciones</a>
</nav>

<main>
    <section>
        <h2>Mascotas disponibles</h2>
        <p>
            Estas son algunas de las mascotas que actualmente buscan un hogar.
        </p>

        <div class="mascotas">
            <div class="mascota">
                <img src="{{ asset('images/rocky.jpg') }}" alt="Rocky">
                <h3>Rocky</h3>
                <p>Perro adulto, amigable y tranquilo</p>
                <button type="button" id="estado-rocky">Disponible</button>
            </div>

            <div class="mascota">
                <img src="{{ asset('images/luna.jpg') }}" alt="Luna">
                <h3>Luna</h3>
                <p>Gata tranquila y cariñosa</p>
                <button type="button" id="estado-luna">Disponible</button>
            </div>

            <div class="mascota">
                <img src="{{ asset('images/max.jpg') }}" alt="Max">
                <h3>Max</h3>
                <p>Perro joven, activo y jugueton</p>
                <button type="button" id="estado-max">Disponible</button>
            </div>
        </div>
    </section>


    <section class="formulario">
        <h2>Formulario de Solicitud de Adopcion</h2>
        <form id="form-adopcion" novalidate>
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">

            <label for="correo">Correo electronico</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">

            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Ingrese su telefono">

            <label for="mascota">Mascota que desea adoptar</label>

            <select id="mascota" name="mascota">
                <option>Seleccione una opcion</option>
                <option>Max</option>
                <option>Luna</option>
                <option>Rocky</option>
            </select>

            <label for="motivo">¿Por que desea adoptar?</label>

            <textarea id="motivo" name="motivo" rows="5"
                placeholder="Escriba brevemente su motivo"></textarea>

            <input type="submit" value="Enviar solicitud">
            <p id="error-pedido" class="aviso"></p>
        </form>

    </section>

</main>

<footer>
    © 2026 Centro de Adopciones San Martin de Porres ®
</footer>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
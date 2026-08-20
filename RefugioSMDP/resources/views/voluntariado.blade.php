<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voluntariado - Centro de Adopciones San Martin de Porres</title>
    <link rel="stylesheet" href="/css/styles.css">
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

    <section class="presentacion">

        <div class="texto-imagen">

            <div>
                <h2>Voluntariado</h2>

                <p>
                    El refugio necesita personas que quieran colaborar con el
                    cuidado de los animales y las actividades que se realizan.
                </p>
            </div>

            <img src="{{ asset('images/voluntariado.jpg') }}" alt="Voluntariado">

        </div>

    </section>


    <section>

        <h2>Como puedes ayudar</h2>

        <div class="opciones">

            <div class="opcion">
                <h3>Cuidado</h3>
                <p>Ayudar con la alimentacion y cuidado de las mascotas.</p>
            </div>

            <div class="opcion">
                <h3>Limpieza</h3>
                <p>Colaborar con el mantenimiento de los espacios del refugio.</p>
            </div>

            <div class="opcion">
                <h3>Eventos</h3>
                <p>Participar en jornadas y actividades de adopcion.</p>
            </div>

        </div>

    </section>

</main>

<footer>
    © 2026 Centro de Adopciones San Martin de Porres ®
</footer>

</body>

</html>
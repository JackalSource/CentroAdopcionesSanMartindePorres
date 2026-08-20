<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donaciones - Centro de Adopciones San Martin de Porres</title>
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
                <h2>Donaciones</h2>

                <p>
                    Las donaciones ayudan a cubrir alimento, medicamentos
                    y diferentes necesidades de los animales del refugio.
                </p>
            </div>

            <img src="{{ asset('images/donacion.jpg') }}" alt="Donaciones">

        </div>

    </section>


    <section>

        <h2>Que puedes donar</h2>

        <div class="opciones">

            <div class="opcion">
                <h3>Alimentos</h3>
                <p>Alimento para perros y gatos.</p>
            </div>

            <div class="opcion">
                <h3>Medicamentos</h3>
                <p>Productos necesarios para el cuidado de las mascotas.</p>
            </div>

            <div class="opcion">
                <h3>Otros recursos</h3>
                <p>Mantas, recipientes y productos de limpieza.</p>
            </div>

        </div>

    </section>

</main>

<footer>
    © 2026 Centro de Adopciones San Martin de Porres ®
</footer>

</body>

</html>
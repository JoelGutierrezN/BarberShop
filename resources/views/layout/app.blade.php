<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('layout.navbar')
    <head>
        <title>Studio F - @yield('title')</title>
    </head>
    <body>
        @show
 
        <div class="container">
            <div class="card bg-light text-center">
                <main class="section">
                    <h1 class="mt-5">Seccion de Prueba</h1>
                    <p class="lead">Este contenido existe unicamente para colocar robustes a la pagina de prueba</p>
                </main>
                <section class="section">
                    <h1 class="mt-5">Seccion de Prueba</h1>
                    <p class="lead">Este contenido existe unicamente para colocar robustes a la pagina de prueba</p>
                </section>
                <section class="section">
                    <h1 class="mt-5">Seccion de Prueba</h1>
                    <p class="lead">Este contenido existe unicamente para colocar robustes a la pagina de prueba</p>
                </section>
            </div>
        </div>
        <div>
                @include('layout.footer')
        </div>
    </body>
</html>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    //si no existe usuario
    header('Location: ../view/AccesoDenegado.php');
}else { ?>
    <!doctype html>
    <html lang="en">
    
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>STEL</title>
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link rel="shortcout icon" href="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png">
            <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

        </head>

        <body>
        
            <!-- Menu lateral -->

            <nav class="navbar navbar-expand-lg" style="background-color: #23518C;">

                <div class="container-fluid">

                    <a class="navbar-brand" href="paginaInicioModulos.php">
                        <img src="0. Imagenes/0. Logos/3. logo sin  nombre blanco.png" alt="Logo" width="60" height="65" class="d-inline-block align-text-top">
                    </a>

                    <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">

                        <ul class="navbar-nav">

                            <li class="nav-item fs-3">
                                <a class="nav-link active text-white" aria-current="page" href="paginaInicioModulos.html">STEL</a>
                            </li>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuarios <i class="bi bi-people-fill"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="usuriosCreacion.html">Crear Usurario</a></li>
                                    <li><a class="dropdown-item" href="consultarUsu.html">Consultar Usuario</a></li>
                                    <li><a class="dropdown-item" href="consultarInmueble.html">Consultar Inmueble</a></li>


                                </ul>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Administración <i class="bi bi-house"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="administracionDocumentacion.html">Documentación</a></li>
                                    <li><a class="dropdown-item" href="../view/multasSeccion.php">Multas</a></li>
                                    <li><a class="dropdown-item" href="carteraSeccion.html">Cartera</a></li>
                                    <li><a class="dropdown-item" href="visitantesSeccion.html">Vistantes</a></li>
                                    <li><a class="dropdown-item" href="../view/resumenDatos.php">Resumen de datos</a></li>

                                </ul>

                            <li class="nav-item dropdown align-self-center">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Alquiler Parqueaderos <i class="bi bi-car-front-fill"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="solicitudesAlquiler.html">Solicitudes alquiler</a></li>
                                    <li><a class="dropdown-item" href="cuposParqueadero.html">Cupos parqueadero</a></li>
                                    <li><a class="dropdown-item" href="movimientoVehiculo.html">Entrada y Salida</a></li>
                                    <li><a class="dropdown-item" href="configuracionAlquiler.html">Configuración</a></li>

                                </ul>

                            </li>
                    
                            <li class="nav-item dropdown align-self-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Comunicación <i class="bi bi-broadcast"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="correspondencia.html">Correspondencia</a></li>
                                    <li><a class="dropdown-item" href="../view/novedades.php">Novedades</a></li>

                                </ul>

                            </li>

                            <li class="nav-item align-self-center">
                                <a class="nav-link active text-white d-flex justify-content-end" aria-current="page"> <a href="../controller/sesion.php">Cerrar sesión</a>
                            </li>
                        
                        </ul>


                    </div>

                </div>

            </nav>

            <!-- Inicio Tarjetas -->

            <div class="container-fluid">

                <div class="container text-center mt-3 ">

                    <div class="container text-center">

                        <div class="row align-items-start">

                            <div class="col"> 

                                <div class="card mb-5" style="width: 20rem;">

                                    <img src="0. Imagenes/10. ModuloInicio/0_cartaVoladora.jpg" class="card-img-top" alt="...">
                                    
                                    <div class="card-body">
                                    
                                        <h5 class="card-title">Novedades</h5>
                                        <p class="card-text" style="text-align: justify;">Las novedades son cartas de comunicación por parte del residente o del trabajador para informar acerca de una situación relacionada al conjunto residencial.</p>
                                    
                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <button type="button" class="btn btn-primary">Novedades residentes: 6</button>
                                        <button type="button" class="btn btn-warning">Novedades trabajadores: 3</button>
                                    
                                    </ul>
                                
                                </div>

                            </div>

                            <div class="col"> 

                                <div class="card mb-5" style="width: 20rem;">

                                    <img src="0. Imagenes/10. ModuloInicio/1_motoCarr0Estacionado.jpg" class="card-img-top" alt="...">
                                    
                                    <div class="card-body">
                                    
                                        <h5 class="card-title">Alquileres</h5>
                                        <p class="card-text" style="text-align: justify; padding-bottom: 66px;">Solicitdudes de alquielres realizados por parte de los residentes para los estacionamientos de parqueadero de carro o motos.</p>
                                    
                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <button type="button" class="btn btn-success" style="background-color: #851694; border: #851694 ">Solicitud Alquiler: 6</button>
                                    
                                    </ul>
                                
                                </div>

                            </div>

                            <div class="col">

                                <div class="card mb-5" style="width: 20rem;">

                                    <img src="0. Imagenes/10. ModuloInicio/2_carteraDocumentos.jpg" class="card-img-top">

                                    <div class="card-body">

                                        <h5 class="card-title">Estado cartera</h5>

                                        <p class="card-text" style="text-align: justify; padding-bottom: 53px;">El estado de cartera es la cantidad de inmuebles con un estado igual a paz y salvo o mora.</p>

                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <button type="button" class="btn btn-success">Inmuebles - Paz y Salvo: 190</button>

                                        <button type="button" class="btn btn-secondary">Inmuebles - Mora: 50</button>
                                    
                                    </ul>
                                
                                </div>

                            </div>

                        </div>

                    </div>                
                    
                </div>
            
            </div>

            <!-- Footer -->

            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        </body>

    </html>
<?php
}
?>    
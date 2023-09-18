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

                    <a class="navbar-brand" href="paginaInicioModulos.html">
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

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Adminstración <i class="bi bi-house"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="administracionDocumentacion.html">Documentación</a></li>
                                    <li><a class="dropdown-item" href="multasSeccion.html">Multas</a></li>
                                    <li><a class="dropdown-item" href="carteraSeccion.html">Cartera</a></li>
                                    <li><a class="dropdown-item" href="visitantesSeccion.html">Vistantes</a></li>
                                    <li><a class="dropdown-item" href="resumenDatos.html">Resumen de datos</a></li>

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
                                    <li><a class="dropdown-item" href="novedades.html">Novedades</a></li>

                                </ul>

                            </li>

                            <li class="nav-item align-self-center">
                                <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="index.html">Salir</a>
                            </li>
                        
                        </ul>


                    </div>

                </div>

            </nav>

            <!-- Seleccion tipo de usuario -->

            <div class="container-fluid">

                <div class="container text-center mt-3">

                    <div class="container text-center">

                        <div class="row justify-content-center">

                            <div class="col"> 

                                <div class="card mx-auto" style="width: 20rem;">

                                    <img src="0. Imagenes/11. moduloCreacionUsuario/usuario_residente.jpg" class="card-img-top" alt="...">
                                    
                                    <div class="card-body">
                                    
                                        <h5 class="card-title">Residente</h5>
                                        <hr>
                                        <p class="card-text" style="text-align: justify;">Existen tres clases de residente: Residente propiertario, residente arrendatario y residente integrante. Los primeros tienen acceso a STEL y el tercera esta enfocado para la recoleccion de datos.</p>
                                    
                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <a href="formularioResidente.html" style="text-decoration: none; color: #ffffff; background-color:#b34545; border-radius: 3px; padding:5px; ">Crear Usuario</a>
                                        <a href="error404.html" style="text-decoration: none; color: #ffffff; background-color:#45a8b3; border-radius: 3px; padding:5px; ">Conocer mas...</a>
                                        
                                    
                                    </ul>
                                
                                </div>

                            </div>

                            <div class="col"> 

                                <div class="card mx-auto" style="width: 20rem;">

                                    <img src="0. Imagenes/11. moduloCreacionUsuario/usuario_guardia_seguridad.jpg" class="card-img-top" alt="...">
                                    
                                    <div class="card-body">
                                    
                                        <h5 class="card-title">Guardia de Seguridad</h5>
                                        <hr>
                                        <p class="card-text" style="text-align: justify;">Los usuarios guardias de seguridad se caracterizan por contar con un contrato relacionado a una empresa de seguridad, certificados laborales, documentos personales, fecha duracion del contrato, etc.</p>
                                    
                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <a href="formularioGuardiSeguridad.html" style="text-decoration: none; color: #ffffff; background-color:#4552b3; border-radius: 3px; padding:5px; ">Crear Usuario</a>
                                        <a href="error404.html" style="text-decoration: none; color: #ffffff; background-color:#b37145; border-radius: 3px; padding:5px; ">Conocer mas...</a>
                                    
                                    </ul>
                                
                                </div>

                            </div>

                            <div class="col">

                                <div class="card mx-auto" style="width: 20rem;">

                                    <img src="0. Imagenes/11. moduloCreacionUsuario/usuario_todero.jpg" class="card-img-top">

                                    <div class="card-body">

                                        <h5 class="card-title">Todero</h5>
                                        <hr>
                                        <p class="card-text" style="text-align: justify; padding-bottom: 24px">El usuario todero  contara con un contrato, documentos de EPS, ARL, pesion y certificados laborales. Tendra acceso a documentación del conjunto residencial, creacion de novedades, etc.</p>

                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                    
                                        <a href="formularioTodero.html" style="text-decoration: none; color: #ffffff; background-color:#db5d22; border-radius: 3px; padding:5px; ">Crear Usuario</a>
                                        <a href="error404.html" style="text-decoration: none; color: #ffffff; background-color:#504842; border-radius: 3px; padding:5px; ">Conocer mas...</a>
                                    
                                    </ul>
                                
                                </div>

                            </div>

                        </div>

                    </div>                
                    
                </div>
            
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        </body>

    </html>
<?php
}
?>    
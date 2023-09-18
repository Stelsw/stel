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
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
                                    <li><a class="dropdown-item" href="consultarUsu.html">Consultar nombre</a></li>
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

            <!-- Formulario -->

            <div class="container text-center pt-4 ">
                
                <div class="row align-items-start">
                
                    <div class="col">

                        <form action="">
                    
                            <H1 style="margin-bottom: 30px;">Registrar residente</H1>

                            <hr>

                            <!-- Tipo de residente -->

                            <label for="tipoResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Tipo de Residente</label>
                            <select class="form-select" aria-label="Default select example" id="tipoResidente">
                                <option selected>seleccionar...</option>
                                <option value="Residente-Propietario">Residente - Propietario</option>
                                <option value="Residente-Propietario">Residente - Arrendatario</option>
                                <option value="Residente-Propietario">Residente - Integrante</option>
                            </select>

                            <!-- Nombre residente -->

                            <label for="nombreResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Nombre de residente</label>
                            <input type="text" class="form-control" id="nombreResidente" aria-describedby="nombreResidente" maxlength="35" placeholder="nombre...">

                            <!-- Cedula -->

                            <label for="celularResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Cedula...</label>
                            <input type="number" class="form-control" id="celularResidente" aria-describedby="celularResidente" maxlength="35" placeholder="cedula...">

                            <!-- Celular -->

                            <label for="celularResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Celular...</label>
                            <input type="number" class="form-control" id="celularResidente" aria-describedby="celularResidente" maxlength="35" placeholder="celular...">

                            <!-- Correo Electronico -->

                            <label for="correoResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Correo electronico...</label>
                            <input type="email" class="form-control" id="correoResidente" aria-describedby="correoResidente" maxlength="35" placeholder="correo...">

                            <!-- Fecha de nacimiento -->

                            <label for="fnacimientoResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fnacimientoResidente" aria-describedby="fnacimientoResidente" maxlength="35" placeholder="fecha de nacimiento">

                            <!-- Anden -->

                            <label for="andenResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Anden</label>
                            <select class="form-select" aria-label="Default select example" id="andenResidente">
                                <option selected>seleccionar...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                            <!-- Casa -->

                            <label for="casaResidente" class="formulario__label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;">Numero de casa</label>
                            <input type="text" class="form-control" id="casaResidente" aria-describedby="casaResidente" maxlength="35" placeholder="numero de casa...">
                            
                            <button type="button" class="btn btn-primary m-5 rounded-1 fs-4" style="background-color:#23518C; border: #23518C ;">Registrar</button>

                        </form>
                
                    </div>
                
                    <div class="col pb-4">
                    
                        <img src="0. Imagenes/12. registroUsuarios/registroUsuarioResidente.png" alt="" style="border-radius: 10px;">
                
                    </div>
                
                </div>
            
            </div>
            


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        </body>

    </html>
<?php
}
?>    
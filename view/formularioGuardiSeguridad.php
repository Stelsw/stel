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

            <!-- Formulario -->

            <div class="container text-center pt-4 ">
                
                <div class="row align-items-start">
                
                    <div class="col">
                    
                        <H1 style="margin-bottom: 30px;">Usurario Guardia Seguridad</H1>

                        <hr>

                        <div>

                            <form action="">

                                <!--Nombre guardiaSeguridad -->

                                <label for="nombreguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Nombre</label>
                                <input type="text" class="form-control" id="nombreguardiaSeguridad" aria-describedby="nombre_del_guardiaSeguridad" maxlength="35" placeholder="nombre...">

                                <!-- Cedula guardiaSeguridad -->

                                <label for="cedulaguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Cedula</label>
                                <input type="tel" class="form-control" id="cedulaguardiaSeguridad" aria-describedby="cedula_del_guardiaSeguridad" maxlength="11" placeholder="cedula...">

                                <!-- Celular guardiaSeguridad -->

                                <label for="celularguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Celular</label>
                                <input type="tel" class="form-control" id="celularguardiaSeguridad" aria-describedby="celular_del_guardiaSeguridad" maxlength="20" placeholder="celular...">

                                <!-- Email -->

                                <label for="emailguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Correo electronico</label>
                                <input type="email" class="form-control" id="emailguardiaSeguridad" aria-describedby="email_del_guardiaSeguridad" maxlength="40" placeholder="correo electronico...">

                                <!-- Empresa -->

                                <label for="emailguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Empresa</label>
                                <input type="email" class="form-control" id="emailguardiaSeguridad" aria-describedby="email_del_guardiaSeguridad" maxlength="40" placeholder="nombre de la empresa...">

                                <!-- Contrato -->

                                <div class="container text-center pt-4 pb-5">

                                    <div class="row align-items-start">

                                        <div class="col">

                                            <!-- Tipo de Contrato -->

                                            <label for="andenguardiaSeguridad" style="margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de contrato</label>
                                            <select id=andenguardiaSeguridad class="form-select" aria-label="Anden_Perteneciente">
                                                <option>contrato...</option>
                                                <option value="Indefinido">Indefinido</option>
                                                <option value="Fijo">Fijo</option>
                                                <option value="Fijo">Prestación de Servicios</option>
                                
                                            </select>

                                        </div>

                                        <div class="col">

                                            <!-- Contrato -->

                                            <div class="mb-3">
                                                
                                                <label for="contratoguaridaSeguridad" class="form-label" style="margin-bottom: 10px; font-weight: 700; color:#23518C">Contrato</label>                                            
                                                <input class="form-control" type="file" id="contratoguaridaSeguridad">
                                            
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- Certificados -->

                                <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" style="background-color:#23518C; width: 400px;">Certificados</button>
                                </p>

                                
                                <div style="min-height: 10px;">
                                    
                                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    
                                        <div class="card card-body" style="width: 100%;">

                                        <!--Nombre certificado -->

                                        <label for="nombreCertificadoguardiaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Nombre certificado</label>
                                        <input type="text" class="form-control" id="nombreCertificadoguardiaSeguridad" aria-describedby="nombre_del_guardiaSeguridad" maxlength="35" placeholder="nombre certificado..."> 

                                        <!-- Documento Certificado -->

                                        <div class="mb-3">
                                                
                                            <label for="contratoguaridaSeguridad" class="form-label" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Certificado</label>                                            
                                            <input class="form-control" type="file" id="contratoguaridaSeguridad">
                                            
                                        </div>                                    


                                        </div>

                                    </div>
                                
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);">Crear Usuario</button>
                                </div>
                                
                            </form>

                        </div>
                
                    </div>
                
                    <div class="col pb-4">
                    
                        <img src="0. Imagenes/12. registroUsuarios/registroUsuarioGuardiaSeguridad.png" alt="" style="border-radius: 10px;">
                
                    </div>
                
                </div>
            
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        </body>

    </html>
<?php
}
?>        
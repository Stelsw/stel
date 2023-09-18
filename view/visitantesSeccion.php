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

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet" type="text/css" href="1. CSS/2. Modulos.css">

            <script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" defer></script>
            <script src="2. JavaScript/modulos.js" defer></script>


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

            <!-- Crear formulario -->

                    <!-- Explicacion Usuarios -->

                    <div class="container d-text-center pt-4 ">

                
                        <div class="row justify-content-center">
                        
                            <div class="col">

                                <h2>Visitantes</h2>
                                <hr>
            
                                <form action="">

                                    <!-- Inmuebles -->

                                    <label for="nomVisitante" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Nombre Visitante</label>
                                    <input type="text" class="form-control" id="nomVisitante" aria-describedby="nombre del visitante" maxlength="35" placeholder="nombre del visitante...">
                                    <label for="cedVisitante" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Cedula Visitante</label>
                                    <input type="number" class="form-control" id="cedVisitante" aria-describedby="cedula del visitante" maxlength="11" placeholder="numero inmueble...">
                                    <label for="numeroInmueble" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Numero Inmueble</label>
                                    <input type="number" class="form-control" id="numeroInmueble" aria-describedby="numeor del inmueble con la multa" maxlength="3" placeholder="numero inmueble...">
                                    <label for="nombreResidenteAutoriza" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C;" >Nombre residente que autoriza</label>
                                    <input type="tel" class="form-control" id="nombreResidenteAutoriza" aria-describedby="nombre del residente que autoriza" maxlength="3" placeholder="nombre del residente que autoriza...">

                                </form>

                                <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15); width: 200px;">Registrar</button>

                        
                            </div>
                        
                            <div class="col">

                                <img src="0. Imagenes/17. visitantes/0. visitantes.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

                            </div>
                            
                        
                        </div>
                    
                    </div>

            <hr style="margin-left: 115px; margin-right: 115px;">

            <div style="margin-left: 115px; margin-right: 115px; margin-top: 20px; margin-bottom: 25px;">

                <table id="example" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>

                            <th>Anden</th>
                            <th>Inmueble</th>
                            <th>Nombre</th>
                            <th>Consultar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10</td>
                            <td>Juan Esteban Cajiao Madero</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">consultar</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>20</td>
                            <td>Johanna Diaz Robledo</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">consultar</a></td>
                        </tr>                    
                        <tr>
                            <td>9</td>
                            <td>103</td>
                            <td>David Santiago Olaya</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">consultar</a></td>
                        </tr>                   
                        <tr>
                            <td>7</td>
                            <td>83</td>
                            <td>Milan Cajiao Morera</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">consultar</a></td>
                        </tr>                       
                        <tr>
                            <td>8</td>
                            <td>100</td>
                            <td>Lasa Cajiao Morera</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">consultar</a></td>
                        </tr>              
                    </tbody>
                </table>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        </body>
        
    </html>
<?php
}
?>    
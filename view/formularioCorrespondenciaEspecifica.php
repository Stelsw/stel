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

                                <h2>Correspondencia especifica</h2>
                                <hr>
            
                                <form action="">

                                    <!-- Tipo de Correspondencia -->

                                    <label for="tipoCorrespondencia" style="margin-top: 15px; margin-bottom: 10px; font-weight: 700; color:#23518C">Tipo de correspondencia</label>
                                    <select id="tipoCorrespondencia"class="form-select" aria-label="tipoCorrespondencia">

                                        <option>tipo de correspondencia...</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Banco">Paquete Banco</option>
                                        <option value="Paquete">Paquete</option>
                                        <option value="Paquete">Otro</option>
                                        
                                    </select>

                                    <!-- Fecha Entrega de correspondencia -->

                                    <label for="fechaEntregaCorrespondencia" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Fecha de recibido correspondencia</label>
                                    <input type="date" class="form-control" id="fechaEntregaCorrespondencia" aria-describedby="fechaEntregaCorrespondencia">

                                    <!-- Torre -->

                                    <label for="torre" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Anden</label>
                                    <select class="form-select" aria-label="Default select example" id="torre">
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
                                    
                                    <!-- Apartamento -->

                                    <label for="apartamento" class="form-label" style="margin-top: 15px; margin-bottom: 15px; font-weight: 700; color:#23518C" >Casa</label>
                                    <input type="number" class="form-control" id="apartamento" aria-describedby="apartamento" placeholder="numero de anden...">


                                </form>

                                <button type="submit" class="btn btn-primary mb-3" style="margin-top: 30px; background-color: #0d0d0d; color: #f2ebdc; border: 1px solid rgba(0,0,0,0.15);">Registrar correspondencia</button>

                        
                            </div>

                            <!-- Imagen -->
                        
                            <div class="col">

                                <img src="0. Imagenes/18. correspondencia/3-correspondenciaEspecifica.png" alt="" style="border-radius: 10px; margin-left: 90px; margin-top: 20px;">

                            </div>
                            
                        
                        </div>
                    
                    </div>

            <hr style="margin-left: 115px; margin-right: 115px;">

            <div style="margin-left: 115px; margin-right: 115px; margin-top: 20px; margin-bottom: 25px;">

                <table id="example" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>

                            <th>Inmueble</th>
                            <th>Tipo de correspondencia</th>
                            <th>Fecha de recibido</th>
                            <th>Estado</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td>Recibo de Internet</td>
                            <td>2023-01-05</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>

                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Paquete Banco</td>
                            <td>2023-05-15</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Paquete</td>
                            <td>2023-06-04</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Paquete</td>
                            <td>2023-04-23</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Paquete</td>
                            <td>2023-01-10</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Recibo de Internet</td>
                            <td>2023-01-10</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
                        </tr> 
                        <tr>
                            <td>67</td>
                            <td>Recibo de Internet</td>
                            <td>2023-01-05</td>
                            <td><a href="error500.html" style="background-color: #23518C; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Entregado</a><a href="error500.html" style="background-color: #BB2D3B; text-decoration: none; color:#f2ebdc; padding: 5px; border-radius: 10px; margin:5px;">Eliminar</a></td>
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
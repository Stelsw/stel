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
                                <a class="nav-link active text-white" aria-current="page" href="../view/paginaInicioModulos.php">STEL</a>
                            </li>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Usuarios <i class="bi bi-people-fill"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="usuriosCreacion.html">Crear Usuario</a></li>
                                    <li><a class="dropdown-item" href="consultarUsu.html">Consultar Usuario</a></li>
                                    <li><a class="dropdown-item" href="consultarInmueble.html">Consultar Inmueble</a></li>


                                </ul>

                            <li class="nav-item dropdown align-self-center">

                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Adminstración <i class="bi bi-house"></i></a>

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
                                    <li><a class="dropdown-item" href="novedades.html">Novedades</a></li>

                                </ul>

                            </li>

                            <li class="nav-item align-self-center">
                                <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="../controller/logout.php">Cerrar sesión</a>
                            </li>
                        
                        </ul>


                    </div>

                </div>

            </nav>

            <!-- Dashboard -->

            <!-- Para la creación del dashboard me inspire usando la siguiente pagina, https://dashboardpack.com/live-demo-preview/?livedemo=360380-->

            <div class="container px-3 pt-4 text-center">

                <div class="row gx-5">
                
                    <div class="col">
                
                        <div class="card" style="width: 18rem;">

                            <ul class="list-group list-group-flush">
                            
                                <li class="list-group-item" style="background-color: #23518C; color: #f2ebdc; font-size: 20px;">Morosos</li>
                            
                                <li class="list-group-item">

                                    <div class="container px-4 text-center">
                                        <div class="row gx-5">
                                        <div class="col">
                                        <div class="" style="font-size: 30px;">84</div>
                                        </div>
                                        <div class="col">
                                            <div class=""><i class="bi bi-bar-chart" style="font-size: 40px;"></i></div>
                                        </div>
                                        </div>
                                    </div>

                                </li>
                            
                            </ul>
                            
                            <div class="card-footer"><a href="carteraSeccion.html" style="text-decoration: none; color: #0d0d0d;">Cartera</a></div>

                        </div>
                
                    </div>
                
                    <div class="col">
                    
                        <div class="card" style="width: 18rem;">

                            <ul class="list-group list-group-flush">
                            
                                <li class="list-group-item" style="background-color: #23518C; color: #f2ebdc; font-size: 20px;">Novedades Residentes</li>
                            
                                <li class="list-group-item">

                                    <div class="container px-4 text-center">
                                        <div class="row gx-5">
                                        <div class="col">
                                        <div class="" style="font-size: 30px;">10</div>
                                        </div>
                                        <div class="col">
                                            <div class=""><i class="bi bi-envelope-paper" style="font-size: 40px;"></i></div>
                                        </div>
                                        </div>
                                    </div>

                                </li>
                            
                            </ul>
                            
                            <div class="card-footer"><a href="novedades.html" style="text-decoration: none; color: #0d0d0d;">Novedades</a></div>

                        </div>
                
                    </div>
                
                    <div class="col">
                    
                        <div class="card" style="width: 18rem;">

                            <ul class="list-group list-group-flush">
                            
                                <li class="list-group-item" style="background-color: #23518C; color: #f2ebdc; font-size: 20px;">Solicitudes Alquiler</li>
                            
                                <li class="list-group-item">

                                    <div class="container px-4 text-center">
                                        <div class="row gx-5">
                                        <div class="col">
                                        <div class="" style="font-size: 30px;">5</div>
                                        </div>
                                        <div class="col">
                                            <div class=""><i class="bi bi-p-square" style="font-size: 40px;"></i></div>
                                        </div>
                                        </div>
                                    </div>

                                </li>
                            
                            </ul>
                            
                            <div class="card-footer"><a href="solicitudesAlquiler.html" style="text-decoration: none; color: #0d0d0d;">Solicitudes</a></div>

                        </div>
                
                    </div>
                
                </div>
            
            </div>




            <!-- Investigar chart js, d3 para crear graficas
            
                En el siguiente video se explica mucho mas sobre chart.js
                https://www.youtube.com/watch?v=NySBh_DIRlg&list=PLc1g3vwxhg1WOgHSDWWUFljioMJxepLX4
            
            -->

            <div class="container text-center">
                <div class="row align-items-start">
                
                    <div class="col my-5">
                    
                        <div class="card" style="padding-bottom: 50px;">

                            <div class="card-body">
                            
                                <h5 style="color: #23518C;">Novedades Trabajadores y Residentes <i class="bi bi-newspaper" style="font-size: 30px;"></i></h5>
                                <hr>
                                <canvas id="myChart"></canvas>

                            </div>
                        
                        </div>

                        <div class="card" style="margin-top: 30px; padding-bottom: 60px;">

                            <div class="card-body">

                                <h5 style="color: #23518C;">Distribución de residentes <i class="bi bi-circle-square" style="font-size: 30px;"></i></h5>
                                <hr>
                                <canvas id="DistribuciónResidentes"></canvas>

                            </div>

                        </div>
                
                    </div>
                
                    <div class="col my-5">
                    
                        <div class="card" style="padding-bottom: 60px;">

                            <div class="card-body">
                            
                                <h5 style="color: #23518C;">Multas sin pagar<i class="bi bi-cash-coin" style="font-size: 30px; margin-left: 10px; align-items: center;"></i></h5>
                                <hr>
                                <canvas id="multasDash"></canvas>
                                

                            </div>
                        
                        </div>

                        <div class="card" style = "margin-top: 30px;">

                            <div class="card-body">

                                <h5 style="color: #23518C;">Numero de visitantes por andenes/semana <i class="bi bi-house-door-fill" style="font-size: 30px;"></i></h5>
                                <hr>
                                <div class="container text-left">

                                    <table class="table">

                                        <thead>

                                            <tr>
                                                <th scope="col"># Anden</th>
                                                <th scope="col">Cantidad visitantes</th>
                                                <th scope="col">Casa mas visitada</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>
                                                <th scope="row">7</th>
                                                <td>45</td>
                                                <td>71</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>30</td>
                                                <td>05</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">6</th>
                                                <td>10</td>
                                                <td>68</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">5</th>
                                                <td>10</td>
                                                <td>59</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">3</th>
                                                <td>05</td>
                                                <td>33</td>
                                            </tr>

                                        </tbody>

                                    </table>

                                    <a href="visitantesSeccion.html" style="color: #23518C;">Saber mas...</a>

                                </div>

                                <hr style="margin-top: 30px;">
                                <h5 style="color: #23518C; margin-bottom: 30px;">Numero de visitantes resibidos en la semana <i class="bi bi-calendar-day-fill" style="font-size: 30px;"></i></h5>
                                <div>

                                    <canvas id="multasDashNumeroVisitantes" style="margin-bottom: 20px;"></canvas>

                                </div>

                            </div>

                        </div>

                
                    </div>
                
                </div>
            
            </div>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Diagrama rectangular - Novedades y residentes -->

            <script>
                const ctx = document.getElementById('myChart');
            
                new Chart(ctx, {              
                    type: 'bar',              
                    data: {                
                        labels: ['23 de Julio', '24 de Julio', '25 de Julio', '26 de Julio', '27 de Julio', '28 de Julio'],                
                        datasets: [                                  
                        {                                    
                            label: 'Residentes',                    
                            data: [6, 9, 0, 1, 5, 4],                    
                            borderWidth: 1,  
                    
                        },                    
                    
                        {                    
                            label: 'Trabajadores',                    
                            data: [2, 5, 3, 7, 2, 8],                    
                            borderWidth: 1,                  
                        },
                        ],
                    },
                
                    options: {                
                        scales: {                  
                            y: {                    
                                beginAtZero: true,                  
                            },                
                        },              
                    },            
                });
            
            </script>

            <!--- Grafico circular - Multas sin pagar -->

            <script>
                const cta = document.getElementById('multasDash').getContext('2d');
            
                new Chart(cta, {
                type: 'doughnut',
                data: {
                    labels: ['Mascota sin correa', 'Ruido Excesivo', 'No recogar excrementos', 'Estacionamiento indebido'],
                    datasets: [{
                    data: [4, 1, 6, 2], // Valores para cada etiqueta
                    backgroundColor: ['#cbbeb5', '#ff6666', '#525266 ', '#423f3b' ], // Colores de fondo para cada sector
                    borderWidth: 1,
                    }],
                },
                options: {
                    // Configuraciones adicionales, si es necesario
                },
                });
            </script>
            
            <!-- Grafico resctangular - Numero de residentes -->

            <script>
                const ctb = document.getElementById('multasDashNumeroVisitantes');

                new Chart(ctb, {              
                    type: 'bar',              
                    data: {                
                        labels: ['23 de Julio', '24 de Julio', '25 de Julio', '26 de Julio', '27 de Julio', '28 de Julio'],                
                        datasets: [                                  
                        {                                    
                            label: 'Visitantes carro',                    
                            data: [6, 9, 0, 1, 5, 4],                  
                            borderWidth: 1,
                            backgroundColor:'#e298367a',
                        },                    

                        {                    
                            label: 'Visitante regular',                    
                            data: [2, 5, 3, 7, 2, 8],                 
                            borderWidth: 1,
                            backgroundColor: '#238c6cc4',
                        },
                        ],
                    },

                    options: {                
                        scales: {                  
                            y: {                    
                                beginAtZero: true,                  
                            },                
                        },              
                    },            
                });
            </script>

            <!-- Grafico Circular - Cantidad de residentes -->

            <script>
                const ctd = document.getElementById('DistribuciónResidentes').getContext('2d');
            
                new Chart(ctd, {
                type: 'doughnut',
                data: {
                    labels: ['Residentes Propietarios', 'Residentes Arrendatarios', 'Residentes Menores de Edad', 'Residentes Mayores de Edad'],
                    datasets: [{
                    data: [90, 10, 40, 60], // Valores para cada etiqueta
                    backgroundColor: ['#0e1a40', '#222f5b', '#5d5d5d', '#946b2d'], // Colores de fondo para cada sector
                    borderWidth: 1,
                    }],
                },
                options: {
                    // Configuraciones adicionales, si es necesario
                },
                });
            </script>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            

        </body>
        
    </html>
<?php
}
?>    
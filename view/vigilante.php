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

                                  
                                    <li><a class="dropdown-item" href="consultarUsu.php">Consultar Usuario</a></li>
                                   


                                </ul>
                    
                            <li class="nav-item dropdown align-self-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Comunicación <i class="bi bi-broadcast"></i></a>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="correspondencia.php">Correspondencia</a></li>
                                  

                                </ul>

                            </li>

                            <li class="nav-item align-self-center">
                                <a class="nav-link active text-white d-flex justify-content-end" aria-current="page" href="../controller/logout.php">Cerrar sesión</a>
                            </li>
                        
                        </ul>


                    </div>

                </div>

            </nav>
            
            
           
            <hr style="margin-left: 115px; margin-right: 115px;">

            <div style="margin-left: 115px; margin-right: 115px; margin-top: 20px; margin-bottom: 25px;">

                <table class="table table-striped" style="width:100%;">
                    <thead>
                    <tr>
                <th scope="col">pkidNovedades</th>
                <th scope="col">Remitente</th>
                <th scope="col">tipoNovedad</th>
                <th scope="col">Asunto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Documento</th>
                <th scope="col">Fecha</th>
                <th scope="col">Respuesta</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
                </tr>
                    </thead>
                    <tbody>
                <?php
                include "../model/conexion.php";
                include "../controller/eliminarNovedad.php";
                //include "../view/editarNovedad.php";    
                $sql=$conn->query("SELECT * FROM tbl_novedades");
                while ($datos=$sql->fetch_object()){ ?>
                    <div class="col-4 m-5 col-md-9 col-sm-5">
                        <tr>
                            <td><?= $datos->pkidNovedades?></td>
                            <td><?= $datos->remNovedades?></td>
                            <td><?= $datos->TipoNovedad?></td>
                            <td><?= $datos->asuntoNovedades?></td>
                            <td><?= $datos->descNovedades?></td>
                            <td><?= $datos->docNovedades?></td>
                            <td><?= $datos->fecNovedades?></td>
                            <td><?= $datos->resNovedades?></td>
                            <td><?= $datos->estNovedades?></td>
                            <td>
                                <button><a href="../view/editarNovedad.php?pkidNovedades=<?=$datos->pkidNovedades ?>" class="btn btn-outline-primary "Primary><i class="bi bi-pencil-fill" name="Actualizar"></i></a></button>
                                <button><a  onclick="return eliminar()"href="../view/novedadesResidentes.php?pkidNovedades=<?=$datos->pkidNovedades ?>" class="btn btn-outline-danger "Danger><i class="bi bi-trash-fill"></i></a></button>
                            </td>
                        </tr>
                    </div>    
                <?php }
                ?>
            </tbody>
            </table>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


            <!--  -->

          
        </body>
        
    </html>
  
  <?php
}
?>    
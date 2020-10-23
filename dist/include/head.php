<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DSI_INV</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script src="js/canvasjs.min.js"></script>
        <link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i>INLUCC</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="include/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav"style="margin-top: 65px;">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="portable.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                                Pc Portable
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="bureau.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                                Pc Bureau
                            </a>
                        </div>                        
                        <div class="nav">
                            <a class="nav-link" href="photocopie.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Photocopie
                            </a>
                        </div>                        
                        <div class="nav">
                            <a class="nav-link" href="imprimante.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Imprimante
                            </a>
                        </div>                                                 
                        <div class="nav">
                            <a class="nav-link" href="scanner.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Scanner
                            </a>
                        </div>                       
                        <div class="nav">
                            <a class="nav-link" href="fax.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-fax"></i></div>
                                Faxs
                            </a>
                        </div>                                               
                        <div class="nav">
                            <a class="nav-link" href="serveur.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                                Serveur
                            </a>
                        </div>                                                                      
                        <div class="nav">
                            <a class="nav-link" href="entretien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Maintenance
                            </a>
                        </div>                                                                                              
                        <div class="nav">
                            <a class="nav-link" href="consomable.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sync-alt fa-spin"></i></div>
                                Consomable
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
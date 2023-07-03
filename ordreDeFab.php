<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>ESITH DigiTex By Advantry X</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://advantryx.com/">
                <div class="sidebar-brand-text mx-3">
                    <img src="./img/LogoAdvantryXpng.png" alt="Logo" style="width: 45mm; height: 12mm;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Départements
            </div>

            <!-- Nav Item - Production -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Atelier de production</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chaines de Production:</h6>
                        <a class="collapse-item" href="dashboardchaine.php?prod_line=PRODLINE1&prod=PRODLINE2" target="_blank">PRODLINE1 </a>
                        <!-- <a class="collapse-item" href="dashboardchaine.php?prod_line=CH+4&prod=CH+4" target="_blank">Chaine 5</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa fa-object-group"></i>
                    <span>Visualisation en 3D</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Visualisation 3D:</h6>
                        <a class="collapse-item" href="http://54.38.32.161/ESITH/digitaltwin/" target="_blank">Digital Twin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Méthode -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Méthode</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bureau de méthode:</h6>
                        <a class="collapse-item" href="objectif.php">Insertion d'objectif</a>
                        <a class="collapse-item" href="ordreDeFab.php">Ordre de fabrication</a>
                        <a class="collapse-item" href="equilibrage.php">Équilibrage</a>
                        <a class="collapse-item" href="allpacks.php">Paquets</a>
                        <a class="collapse-item" href="allgamme.php">Modèle-Gamme</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecq" aria-expanded="true" aria-controls="collapsecq">
                    <i class="fa fa-check-square"></i>
                    <span>Contrôle qualité</span>
                </a>
                <div id="collapsecq" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Partie de contrôle qualité:</h6>
                        <a class="collapse-item" href="controle.php">Contrôle bout de chaine</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Maintenace -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Maintenance</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="implantation.php">Implantation</a>
                        <!-- <a class="collapse-item" href="register.html">Inventaire</a>
                        <a class="collapse-item" href="forgot-password.html">Maintenance Curative</a>
                        <a class="collapse-item" href="forgot-password.html">Maintenance Préventive</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Ressources Humaines -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRH" aria-expanded="true" aria-controls="collapseRH">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ressources humaine</span>
                </a>
                <div id="collapseRH" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="rh.php">Opératrices</a>
                        <a class="collapse-item" href="performanceoperatrice.php">Performances Journalières</a>
                        <a class="collapse-item" href="performanceparheure.php">Performances par Heure</a>
                    </div>
                </div>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mt-4 text-gray-800">Méthode </h1>
                <p class="mb-4"></p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ordre de Fabrication:</h6>
                        <!-- <div class="mb-0 mt-2 mr-2"><a href='http://localhost:8080/#/methode/interface'><img src="./img/add-file.png" alt="icone" width="25mm" height="25mm">Insertion d'un OF</a></div> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <!-- <th>Modifier</th>     -->
                                            <th>Réf de l'OF</th>
                                            <th>Réf Modèle</th>
                                            <th>Client</th>
                                            <th>Atelier</th>
                                            <th>Statut de l'OF</th>
                                            <th>Quantité</th>
                                            <th>Date d'importation</th>
                                            <th>Avancement</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Réf de l'OF</th>
                                            <th>Client</th>
                                            <th>Atelier</th>
                                            <th>Statut de l'OF</th>
                                            <th>Quantité</th>
                                            <th>Réf Modèle</th>
                                            <th>Date d'importation</th>
                                            <th>Avancement</th>
                                        </tr>
                                    </tfoot> -->
                                <tbody>

                                <?php
                                require_once './php/config.php';

                                // Récupération des données de la table p1_of avec des Ofs Distincts
                                $sqlof = "SELECT DISTINCT`prod__of`.`of_num`, `prod__of`.`model_id`,
                                `init__model`.`model`,
                                `prod__of`.`client`, `prod__of`.`asm_shop`, `prod__of`.`of_state`, `prod__of`.`quantity`, `prod__of`.`import_dt`
                                FROM `prod__of`
                                INNER JOIN `init__model` ON `prod__of`.`model_id`= `init__model`.`id`;";
                                $p1_of = mysqli_query($con, $sqlof);

                                // Récupération des données de la table p2_packet
                                $sqlpacket = "SELECT DISTINCT`pack_num`, `of_num`,`quantity` FROM `prod__packet`";
                                $p2_packet = mysqli_query($con, $sqlpacket);

                                // Récupération des données de la table p12_control
                                $sqlcontrol = "SELECT DISTINCT `pack_num`,`quantity` FROM `prod__control`";
                                $p12_control = mysqli_query($con, $sqlcontrol);

                                $ofrow=[];
                                if (mysqli_num_rows($p1_of) > 0) {
                                    while($rowp1_of = mysqli_fetch_assoc($p1_of)) {
                                        $ofrow[] = $rowp1_of;
                                    }
                                }

                                $pack= [];
                                if (mysqli_num_rows($p2_packet) > 0) {
                                    while($rowp2_packet = mysqli_fetch_assoc($p2_packet)) {
                                        $pack[] = $rowp2_packet;
                                    }
                                }
                                $control= [];
                                if (mysqli_num_rows($p12_control) > 0) {
                                    while($rowp12_control = mysqli_fetch_assoc($p12_control)) {
                                        $control[] = $rowp12_control;
                                    }
                                }

                                for ($i=0; $i<count($ofrow); $i++){
                                    $of[$i]=$ofrow[$i]['of_num'];
                                    if (isset($_SESSION['of_num']) && !empty($_SESSION['of_num'])) {
                                        $of[$i]=$_SESSION['of_num'];
                                    }
                                   
                                    //Quantité de chaque OF
                                    $progress=0;
                                    for($l=0; $l<count($pack); $l++){
                                        if ($pack[$l]['of_num']==$ofrow[$i]['of_num']){
                                            for($lc=0; $lc < count($control); $lc++){
                                                if ($pack[$l]['pack_num']==$control[$lc]['pack_num']){
                                                    $progress +=$control[$lc]['quantity'];}
                                            }
                                        }
                                    }
                                    
                                        if ($ofrow[$i]['quantity']!=0){
                                        $avancement=($progress)/$ofrow[$i]['quantity'];} else {$avancement=0;}
                                ?>
                                    <tr>
                                        <!-- <td><a href='edit.php?of_num=<?php // echo ($ofrow[$i]['of_num']) ?>'><img src="./img/edit.png" alt="icone" width="15mm" height="15mm"></a> </td> -->
                                        <!-- &emsp;<a href='deleteconf.php?of=<?php // echo ($ofrow[$i]['of_num']) ?>'><img src="./img/delete.png" alt="icone" width="15mm" height="15mm"></a></td> -->
                                        <td><a href="pack.php?of_num=<?php echo ($ofrow[$i]['of_num']);?>"> <?php echo ($ofrow[$i]['of_num']);?> </a></td>
                                        <td><a href="gamme.php?model_id=<?php echo ($ofrow[$i]['model_id']);?>"> <?php echo ($ofrow[$i]['model']);?> </a></td>
                                        <td><?php echo ($ofrow[$i]['client']);?></td>
                                        <td><?php echo ($ofrow[$i]['asm_shop']);?></td>
                                        <td><?php echo ($ofrow[$i]['of_state']);?></td>
                                        <td><?php echo ($ofrow[$i]['quantity']);?></td>
                                        <td><?php echo ($ofrow[$i]['import_dt']);?></td>
                                        <td><?php echo (round(($avancement*100),2).'%');}?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span> Copyright &copy; Advantry X 2023</span>
                </div>
                </div>
                </footer>
                <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                </a>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/datatables-demo.js"></script>

                </body>

                </html>
            
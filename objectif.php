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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h1 class="h3 mb-2 text-gray-800">Méthode </h1>
                <p class="mb-4"></p>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Objectif du jour:</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            date_default_timezone_set('Africa/Tunis');
                            require_once './php/config.php';
                            ?>
                        <form action="objectif.php" method="post">        
                        <label for="chaineprod" name="chaineprod" value="" > veuillez choisir la chaine de production :</label><br>
                        <select class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle col-xl-2 col-md-2 mb-3 ml-2" name="prodline">
                            <option value="">-- Choisissez le chaine --</option>        
                                <?php $sql2 = "SELECT * FROM `init__prod_line`";
                                    $result2 = mysqli_query($con, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                            <option value1='<?php echo $row2["id"] ?>'> <?php echo $row2['prod_line']; }?></option>
                        </select><br>
                        <label for="model" name="model" value="" > veuillez choisir le modèle :</label><br>
                        <select class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle col-xl-2 col-md-2 mb-3 ml-2" name="model1">
                            <option value="">-- Choisissez le model --</option>        
                                <?php 
                            $sql1 = "SELECT * FROM `init__model`";
                            $result1 = mysqli_query($con, $sql1);
                                while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                            <option value1='<?php  echo $row1["id"] ?>'> <?php  echo $row1['model']; }?></option>
                        </select><br>
                        <label for="Objectif" name="objectif" value="" > Insérer l'objectif :</label><br>
                                <input type="number" name="obj1" class="form-control col-xl-1 col-md-2 mb-1 ml-2 " value="obj"><br>
                                
                            <input class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle col-xl-1 col-md-2 mb-3 ml-2" type="submit" name="Bouton" value="Enregistrer">
                            <input class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle col-xl-1 col-md-2 mb-3 ml-2" type="submit" name="Bouton2" value="Supprimer">
                        </form>
                        <?php
                        //header("content-Type: application/json");
                        
                        
                        $obj1 = 0;
                        $model1 = '';
                        $prodline='';
                        if(isset($_POST['Bouton'])) {
                        if ((isset($_POST['obj1']) && !empty($_POST['obj1']) ) || (isset($_POST['model1']) && !empty($_POST['model1'])) || (isset($_POST['prodline']) && !empty($_POST['prodline']))) {
                            $obj1 = $_POST['obj1'];
                            $model1 = $_POST['model1'];
                            $prodline = $_POST['prodline'];
                        } else {
                             die("");
                        }

                            $query2 = "SELECT * FROM `init__prod_line`";
                            $rslt2 = $con->query($query2);
                            
                            $tab2 = [];
                            while ($item2 = $rslt2->fetch_assoc()) {
                                $tab2[] = $item2;
                            }

                            $query3 = "SELECT * FROM `init__model`";
                            $rslt3 = $con->query($query3);
                            
                            $tab3 = [];
                            while ($item3 = $rslt3->fetch_assoc()) {
                                $tab3[] = $item3;
                            }
                            $id1=0;
                            $modelid1=0;
                            for($i=0; $i<count($tab2); $i++){
                                if ($tab2[$i]['prod_line'] == $prodline){
                                    $id1=$tab2[$i]['id'];
                                }
                            }
                            for($i=0; $i<count($tab3); $i++){
                                if ($tab3[$i]['model'] ==$model1){
                                    $modelid1=$tab3[$i]['id'];
                                }
                            }
                            if ($modelid1!=0 && $obj1!=0){
                                $sql4="SELECT * FROM `prod__prod_line` WHERE `model_id`=$modelid1 AND `prod_line_id`=$id1 AND `cur_date`=CURRENT_DATE";
                                $rslt4=$rsltt= $con->query($sql4);
                                $tab4 = [];
                            while ($item4 = $rslt4->fetch_assoc()) {
                                $tab4[] = $item4;
                            }
                            if (count($tab4)!=0){
                                $sql5="UPDATE `prod__prod_line`SET `objective`=$obj1 WHERE `model_id`=$modelid1 AND `prod_line_id`=$id1";
                                $rslt5= $con->query($sql5);
                            }else{
                                $sql3 = "INSERT INTO `prod__prod_line`(`prod_line_id`, `model_id`, `objective`, `cur_date`) VALUES ($id1, $modelid1, $obj1, curdate())";
                                $rsltt= $con->query($sql3);}
                            }

                        }
                        if(isset($_POST['Bouton2'])) {
                            if ((isset($_POST['model1']) && !empty($_POST['model1'])) || (isset($_POST['prodline']) && !empty($_POST['prodline']))) {
                                
                                $model1 = $_POST['model1'];
                                $prodline = $_POST['prodline'];
                            } else {
                                 die("");
                            }
    
                                $query2 = "SELECT * FROM `init__prod_line`";
                                $rslt2 = $con->query($query2);
                                
                                $tab2 = [];
                                while ($item2 = $rslt2->fetch_assoc()) {
                                    $tab2[] = $item2;
                                }
    
                                $query3 = "SELECT * FROM `init__model`";
                                $rslt3 = $con->query($query3);
                                
                                $tab3 = [];
                                while ($item3 = $rslt3->fetch_assoc()) {
                                    $tab3[] = $item3;
                                }
                                $id1=0;
                                $modelid1=0;
                                for($i=0; $i<count($tab2); $i++){
                                    if ($tab2[$i]['prod_line'] == $prodline){
                                        $id1=$tab2[$i]['id'];
                                    }
                                }
                                for($i=0; $i<count($tab3); $i++){
                                    if ($tab3[$i]['model'] ==$model1){
                                        $modelid1=$tab3[$i]['id'];
                                    }
                                }
                                if ($modelid1!=0 && $prodline!=0){
                                    $sql4="SELECT * FROM `prod__prod_line` WHERE `model_id`=$modelid1 AND `prod_line_id`=$id1 AND `cur_date`=CURRENT_DATE";
                                    $rslt4=$rsltt= $con->query($sql4);
                                    $tab4 = [];
                                while ($item4 = $rslt4->fetch_assoc()) {
                                    $tab4[] = $item4;
                                }
                                if (count($tab4)!=0){
                                    $idobj=$tab4[0]['id'];
                                    $sql5="DELETE FROM `prod__prod_line` WHERE `id`=$idobj";
                                    $rslt5= $con->query($sql5);
                                }else{
                                   die("");}
                                }
    
                            }?>
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
                            <span>Copyright &copy; Advantry X 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>

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
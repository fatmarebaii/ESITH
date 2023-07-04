<?php

date_default_timezone_set('Africa/Tunis');
require_once './php/config.php';
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" id="editor">
                        <h2 class="h1 mb-0 mt-4 text-gray-800">Dashboard</h2>
                        <h3 class="h3 mb-0 ml-4 mt-4 text-primary">Vue Générale</h3>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle mt-4" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tous
                        </button>
                        <div class="dropdown-menu" aria-labelledby="deroulantb">
                            <a href="index.php"><button class="dropdown-item" type="button"> TOUS </button></a>
                            <a href="indexesith.php?prod_line=PRODLINE1"><button class="dropdown-item" type="button"> PRODLINE1 </button></a>
                        </div>
                        <!-- <a href="Save.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Objectif -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                objectif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="Obj"> <?php
                                                                                                            $query = "SELECT `prod__prod_line`.`objective`, `init__prod_line`.`prod_line`, `init__model`.`model` FROM `prod__prod_line` 
                                            INNER JOIN `init__prod_line` ON `prod__prod_line`.`prod_line_id`= `init__prod_line`.`id`
                                            INNER JOIN `init__model` ON `init__model`.`id`= `prod__prod_line`.`model_id`
                                            WHERE `prod__prod_line`.`cur_date`= CURRENT_DATE  ORDER BY `prod__prod_line`.`id` DESC ";
                                                                                                            $rslt = $con->query($query);

                                                                                                            $tab4 = [];
                                                                                                            while ($item = $rslt->fetch_assoc()) {
                                                                                                                $tab4[] = $item;
                                                                                                            }
                                                                                                            $i3 = 0;
                                                                                                            $obj = 0;
                                                                                                            while ($i3 < count($tab4)) {
                                                                                                                $obj += $tab4[$i3]['objective'];
                                                                                                                $i3++;
                                                                                                            }
                                                                                                            echo ($obj);
                                                                                                            ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quantité Engagée -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Quantité Engagée</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="QENG"> <?php
                                                                                                            $quer = "SELECT
                                            `prod_line`,
                                            SUM(pack_qty) AS qty_eng
                                        FROM
                                            `prod__pack_operation`
                                        WHERE
                                            `cur_date` = CURRENT_DATE AND `pack_num` NOT IN(
                                            SELECT
                                                `pack_num`
                                            FROM
                                                `prod__pack_operation`
                                            WHERE
                                                `prod__pack_operation`.`cur_date` < CURRENT_DATE
                                            GROUP BY
                                                `pack_num`
                                        )";
                                                                                                            $rsl = $con->query($quer);

                                                                                                            $tabl = [];
                                                                                                            while ($items = $rsl->fetch_assoc()) {
                                                                                                                $tabl[] = $items;
                                                                                                            }

                                                                                                            $ieng = 0;
                                                                                                            $qengaged = 0;
                                                                                                            while ($ieng < count($tabl)) {
                                                                                                                $qengaged += $tabl[$ieng]['qty_eng'];
                                                                                                                $ieng++;
                                                                                                            }
                                                                                                            echo ($qengaged); ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quantité Encoure -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Quantité Encours </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="QENC1"> <?php
                                                                                                            $query = "SELECT
                                            pack_num,
                                            `of_num`,
                                            pack_qty,
                                            `prod_line`
                                        FROM
                                            `prod__pack_operation`
                                        WHERE
                                            pack_num AND `of_num` NOT IN(
                                            SELECT
                                                pack_num AND `of_num`
                                            FROM
                                                `prod__control`
                                            GROUP BY
                                                `pack_num`
                                        )
                                            GROUP BY
                                            `pack_num`;";
                                                                                                            $rslt = $con->query($query);

                                                                                                            $tab = [];
                                                                                                            while ($item = $rslt->fetch_assoc()) {
                                                                                                                $tab[] = $item;
                                                                                                            }

                                                                                                            $query2 = "SELECT DISTINCT
                                            `prod__control`.`pack_num`,
                                            `prod__control`.`quantity`,
                                            `prod__control`.`defective_pcs`,
                                            `prod__control`.`defects_num`,
                                            `prod__control`.`cur_date`
                                        FROM
                                            `prod__control`
                                        WHERE
                                            `prod__control`.`cur_date` = CURRENT_DATE
                                        GROUP BY
                                            `prod__control`.`pack_num`";
                                                                                                            $rslt2 = $con->query($query2);

                                                                                                            $tab2 = [];
                                                                                                            while ($item2 = $rslt2->fetch_assoc()) {
                                                                                                                $tab2[] = $item2;
                                                                                                            }
                                                                                                            $qdf = 0;
                                                                                                            $qfab = 1;
                                                                                                            $ifab = 0;
                                                                                                            $cq = 0;
                                                                                                            while ($ifab < count($tab2)) {
                                                                                                                $qfab += $tab2[$ifab]['quantity'];
                                                                                                                $qdf += $tab2[$ifab]['defective_pcs'];
                                                                                                                $cq = ($qdf / $qfab) * 100;
                                                                                                                $ifab++;
                                                                                                            }


                                                                                                            $ienc = 0;
                                                                                                            $qencours = 0;
                                                                                                            while ($ienc < count($tab)) {
                                                                                                                if ($tab[$ienc]['pack_qty'] != NULL) {
                                                                                                                    $qencours += $tab[$ienc]['pack_qty'];
                                                                                                                } else {
                                                                                                                    $qencours = 0;
                                                                                                                }
                                                                                                                $ienc++;
                                                                                                            }
                                                                                                            if(($qencours - ($qfab - 1))<0){echo 0; }
                                                                                                            else {
                                                                                                            echo ($qencours - ($qfab - 1));} ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quantité Fabriquée -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Quantité Fabriquée
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="QFAB1"> <?php

                                                                                                            echo ($qfab - 1); ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-1 col-md-3 mb-2"></div>
                        <!-- Controle Qualité -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Contrôle Qualité</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="CQ"> <?php echo (round($cq, 2)); ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Performance -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Rendement </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="Perf"> <?php
                                                $query1 = "SELECT `performance` 
                                                FROM `prod__prod_line_perf_hr` 
                                                WHERE `cur_date` = DATE_FORMAT(CURRENT_DATE, '%Y-%m-%d') ORDER BY `id` DESC LIMIT 2";
                                                $rslt1 = $con->query($query1);

                                                $tab1 = [];
                                                while ($item1 = $rslt1->fetch_assoc()) {
                                                    $tab1[] = $item1;
                                                }
                                                $i1 = 0;
                                                $performance1 = 0;
                                                $perfo=0;
                                                while ($i1 < count($tab1)) {
                                                    $performance1 = $tab1[$i1]['performance'];
                                                    $i1++;
                                                }
                                                if (count($tab1) > 0) {
                                                    $perfo=($performance1) / (count($tab1));
                                                    echo ($perfo);
                                                } else {
                                                    echo ($performance1);
                                                }
                                                ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Présence -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Nombre des opératrices présentes
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="op">
                                                <?php $queryP = "SELECT
                                                                    COUNT(*) AS presence
                                                                FROM
                                                                    prod__presence
                                                                WHERE
                                                                    p_state = 1 AND(cur_date, cur_time) IN(
                                                                    SELECT
                                                                        MAX(cur_date),
                                                                        MAX(cur_time)
                                                                    FROM
                                                                        prod__presence
                                                                    GROUP BY
                                                                        operator
                                                                )";
                                                $rsltP = $con->query($queryP);
                                                $tabP = [];
                                                while ($itemP = $rsltP->fetch_assoc()) {
                                                    $tabP[] = $itemP;
                                                }
                                                echo ($tabP[0]['presence']);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Performance Chart -->
                        <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Performances</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Voir plus:</div>
                                            <a class="dropdown-item" href="performanceoperatrice.php">Ressources Humaine</a>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CETTE PARTIE PHP POUR LE CHART -->
                    <?php
                    // header("content-Type: application/json");
                    date_default_timezone_set('Africa/Tunis');
                    require_once './php/config.php';

                    $query = "SELECT * FROM `prod__prod_line_perf_hr` WHERE `cur_time`>='17:00:00'
                    ORDER BY DATE(cur_date) DESC, HOUR(cur_time) ASC";
                    $rslt = $con->query($query);

                    $tab = [];
                    while ($item = $rslt->fetch_assoc()) {
                        $tab[] = $item;
                    }

                    $p1 = 0;
                    $p11 = 0;
                    $p12 = 0;
                    $p13 = 0;
                    $p14 = 0;
                    $p15 = 0;
                    $ch1 = 0;
                    $ch11 = 0;
                    $ch12 = 0;
                    $ch13 = 0;
                    $ch14 = 0;
                    $ch15 = 0;
                    $perf1 = 0;
                    $perf11 = 0;
                    $perf12 = 0;
                    $perf13 = 0;
                    $perf14 = 0;
                    $perf15 = 0;
                    $i1 = 0;
                    while ($i1 < count($tab)) {
                        switch ($tab[$i1]['cur_date']) {
                            // case date('Y-m-d'):

                            //     $p1 += $tab[$i1]['performance'];
                            //     $ch1++;
                            //     $perf1 = $p1 / $ch1;
                            //     break;
                            case date('Y-m-d', strtotime("-1 day")):

                                $p11 += $tab[$i1]['performance'];
                                $ch11++;
                                $perf11 = $p11 / $ch11;
                                break;
                            case date('Y-m-d', strtotime("-2 day")):

                                $p12 += $tab[$i1]['performance'];
                                $ch12++;
                                $perf12 = $p12 / $ch12;
                                break;
                            case date('Y-m-d', strtotime("-3 day")):

                                $p13 += $tab[$i1]['performance'];
                                $ch13++;
                                $perf13 = $p13 / $ch13;
                                break;
                            case date('Y-m-d', strtotime("-4 day")):

                                $p14 += $tab[$i1]['performance'];
                                $ch14++;
                                $perf14 = $p14 / $ch14;
                                break;
                            case date('Y-m-d', strtotime("-5 day")):

                                $p15 += $tab[$i1]['performance'];
                                $ch15++;
                                $perf15 = $p15 / $ch15;
                                break;
                        }
                        $i1++;
                    }
                    $date = [date('d-m-Y', strtotime("-5 day")), date('d-m-Y', strtotime("-4 day")), date('d-m-Y', strtotime("-3 day")), date('d-m-Y', strtotime("-2 day")), date('d-m-Y', strtotime("-1 day")), date('d-m-Y')];
                    $perf = [($perf15), ($perf14), ($perf13), ($perf12), ($perf11), ($perfo)];
                    ?>
                    <script>
                        var ctx = document.getElementById("myAreaChart");
                        var myLineChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($date); ?>,
                                datasets: [{
                                    label: "Performance totale de l'atelier ",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(128, 156, 237)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: <?php echo json_encode($perf); ?>,
                                }],
                            },
                            options: {
                                maintainAspectRatio: false,
                                layout: {
                                    padding: {
                                        left: 10,
                                        right: 25,
                                        top: 25,
                                        bottom: 0
                                    }
                                },
                                scales: {
                                    xAxes: [{
                                        time: {
                                            unit: 'date'
                                        },
                                        gridLines: {
                                            display: false,
                                            drawBorder: false
                                        },
                                        ticks: {
                                            maxTicksLimit: 7
                                        }
                                    }],
                                    yAxes: [{
                                        ticks: {
                                            maxTicksLimit: 5,
                                            padding: 10,

                                            callback: function(value, index, values) {
                                                return number_format(value);
                                            }
                                        },
                                        gridLines: {
                                            color: "rgb(234, 236, 244)",
                                            zeroLineColor: "rgb(234, 236, 244)",
                                            drawBorder: false,
                                            borderDash: [2],
                                            zeroLineBorderDash: [2]
                                        }
                                    }],
                                },
                                legend: {
                                    display: false
                                },
                                tooltips: {
                                    backgroundColor: "rgb(255,255,255)",
                                    bodyFontColor: '#858796',
                                    titleMarginBottom: 10,
                                    titleFontColor: '#6e707e',
                                    titleFontSize: 14,
                                    borderColor: '#dddfeb',
                                    borderWidth: 1,
                                    xPadding: 15,
                                    yPadding: 15,
                                    displayColors: false,
                                    intersect: false,
                                    mode: 'index',
                                    caretPadding: 10,
                                    callbacks: {
                                        label: function(tooltipItem, chart) {
                                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                            return datasetLabel + number_format(tooltipItem.yLabel);
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                    <!-- CETTE PARTIE PHP POUR LE CHART -->

                    <div class="row">
                        <!-- Quantité Chart -->
                        <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Quantité Fabriquée</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Voir plus:</div>
                                            <a class="dropdown-item" href="allpacks.php">Paquets</a>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChartQte"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CETTE PARTIE PHP POUR LE CHART -->
                    <?php

                    $query2 = "SELECT DISTINCT
                        `prod__control`.`pack_num`,
                        `prod__control`.`quantity`,
                        `prod__control`.`defective_pcs`,
                        `prod__control`.`defects_num`,
                        `prod__control`.`cur_date`
                    FROM
                        `prod__control`
                    GROUP BY
                        `prod__control`.`pack_num`";
                    $rslt2 = $con->query($query2);

                    $tab2 = [];
                    while ($item2 = $rslt2->fetch_assoc()) {
                        $tab2[] = $item2;
                    }

                    $qfab1 = 0;
                    $qfab2 = 0;
                    $qfab3 = 0;
                    $qfab4 = 0;
                    $qfab5 = 0;
                    $qfab6 = 0;
                    $i1 = 0;
                    for ($i1 = 0; $i1 < count($tab2); $i1++) {
                        switch ($tab2[$i1]['cur_date']) {
                            case date('Y-m-d'):
                                $qfab1 += $tab2[$i1]['quantity'];
                                break;
                            case date('Y-m-d', strtotime("-1 day")):
                                $qfab2 += $tab2[$i1]['quantity'];
                                break;
                            case date('Y-m-d', strtotime("-2 day")):
                                $qfab3 += $tab2[$i1]['quantity'];
                                break;
                            case date('Y-m-d', strtotime("-3 day")):
                                $qfab4 += $tab2[$i1]['quantity'];
                                break;
                            case date('Y-m-d', strtotime("-4 day")):
                                $qfab5 += $tab2[$i1]['quantity'];
                                break;
                            case date('Y-m-d', strtotime("-5 day")):
                                $qfab6 += $tab2[$i1]['quantity'];
                                break;
                        }
                    }
                    $date = [date('d-m-Y', strtotime("-5 day")), date('d-m-Y', strtotime("-4 day")), date('d-m-Y', strtotime("-3 day")), date('d-m-Y', strtotime("-2 day")), date('d-m-Y', strtotime("-1 day")), date('d-m-Y')];
                    $qtefab = [$qfab6, $qfab5, $qfab4, $qfab3, $qfab2, ($qfab - 1)];
                    ?>
                    <script>
                        var ctx = document.getElementById("myAreaChartQte");
                        var myLineChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: <?php echo json_encode($date); ?>,
                                datasets: [{
                                    label: "Quantité Fabriquée ",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(128, 156, 237)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: <?php echo json_encode($qtefab); ?>,
                                }],
                            },
                            options: {
                                maintainAspectRatio: false,
                                layout: {
                                    padding: {
                                        left: 10,
                                        right: 25,
                                        top: 25,
                                        bottom: 0
                                    }
                                },
                                scales: {
                                    xAxes: [{
                                        time: {
                                            unit: 'date'
                                        },
                                        gridLines: {
                                            display: false,
                                            drawBorder: false
                                        },
                                        ticks: {
                                            maxTicksLimit: 7
                                        }
                                    }],
                                    yAxes: [{
                                        ticks: {
                                            maxTicksLimit: 5,
                                            padding: 10,
                                            // Include a dollar sign in the ticks
                                            callback: function(value, index, values) {
                                                return number_format(value);
                                            }
                                        },
                                        gridLines: {
                                            color: "rgb(234, 236, 244)",
                                            zeroLineColor: "rgb(234, 236, 244)",
                                            drawBorder: false,
                                            borderDash: [2],
                                            zeroLineBorderDash: [2]
                                        }
                                    }],
                                },
                                legend: {
                                    display: false
                                },
                                tooltips: {
                                    backgroundColor: "rgb(255,255,255)",
                                    bodyFontColor: "#858796",
                                    titleMarginBottom: 10,
                                    titleFontColor: '#6e707e',
                                    titleFontSize: 14,
                                    borderColor: '#dddfeb',
                                    borderWidth: 1,
                                    xPadding: 15,
                                    yPadding: 15,
                                    displayColors: false,
                                    intersect: false,
                                    mode: 'index',
                                    caretPadding: 10,
                                    callbacks: {
                                        label: function(tooltipItem, chart) {
                                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                            return datasetLabel + number_format(tooltipItem.yLabel);
                                        }
                                    }
                                }
                            }
                        });
                    </script>
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

    <!-- Page level custom scripts -->
    <script src="./js/script.js"></script>
    <!-- <script src="js/demo/chart-pie-demo.js"></script> -->

</body>

</html>
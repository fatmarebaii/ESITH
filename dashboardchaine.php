<?php date_default_timezone_set('Africa/Tunis');?>
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
        
            <?php require_once './php/config.php';
            if (isset($_GET["prod_line"]) || isset ($_GET["prod"])) {
                $prodline=$_GET["prod_line"];
                $prod=$_GET["prod"];
                // $prod1=$_GET["prod1"];
            ?>
            <script>
                function autoRefresh() {
                    window.location = window.location.href="dashboardchaine.php?prod_line=<?php echo($prod);?>&prod=<?php echo($prodline);?>";
                }
                setInterval('autoRefresh()', 60000);
            </script>

    </head>
    <body>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg ml-5 mr-4">
                
                <a class="navbar-brand" href="http://advantryx.com/"> <img src="./img/logo.png" alt="Logo" style="width:40mm;height:15mm"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse"><h2 class="navbar-nav ms-auto mb-2 mb-lg-0 ml-4 mr-4 text-gray-800" id="prodline"> Prod-Line: <?php echo ($prodline);}?> </h2></div>
                <div class="collapse navbar-collapse"><h3 class="navbar-nav ms-auto mb-2 mb-lg-0 ml-4 mr-4 text-gray-800" id="date">  </h3></div>
                <div class="collapse navbar-collapse"><h3 class="navbar-nav ms-auto mb-2 mb-lg-0 ml-4 mr-4 text-gray-800" id="time">  </h3></div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <img src="./img/esith.png" alt="LogoISA" style="width:42mm;height:30mm">
                </div>
                <script>
                    // Fonction pour formater le nombre avec un zéro devant s'il est inférieur à 10
                    function formatterNombre(nombre) {
                      return nombre < 10 ? `0${nombre}` : nombre;
                    }
                  
                    // Sélectionner les éléments HTML pour la date et l'heure
                    const dateElement = document.getElementById('date');
                    const heureElement = document.getElementById('time');
                  
                    // Fonction pour afficher la date et l'heure actuelles
                    function afficherDateHeure() {
                      // Obtenir la date et l'heure actuelles
                      const maintenant = new Date();
                      const annee = maintenant.getFullYear();
                      const mois = formatterNombre(maintenant.getMonth() + 1);
                      const jour = formatterNombre(maintenant.getDate());
                      const heures = formatterNombre(maintenant.getHours());
                      const minutes = formatterNombre(maintenant.getMinutes());
                      const secondes = formatterNombre(maintenant.getSeconds());
                  
                      // Afficher la date dans l'élément HTML
                      dateElement.textContent = 'DATE: '.concat( `${jour}-${mois}-${annee}`);
                  
                      // Afficher l'heure dans l'élément HTML
                      heureElement.textContent ='HEURE: '.concat(`${heures}:${minutes}:${secondes}`);
                    }
                  
                    afficherDateHeure();
                  
                    setInterval(afficherDateHeure, 1000);
                </script>
                
            </nav>
            <!--Tableau des Indicateurs-->
            <div class="row ml-2 mr-2">

                <!-- Qté Engagée -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-primary text-uppercase mb-3" style="text-align:center" >Quantité Engagée </div>
                                    <div class="h2 font-weight-bolder text-gray-900" style="text-align:center" id="Qte"> <?php
                                            $quer = "SELECT
                                            `prod_line`,
                                            SUM(pack_qty) AS qty_eng
                                        FROM
                                            `prod__pack_operation`
                                        WHERE
                                            `prod_line`= '$prodline' AND
                                            `cur_date` = CURRENT_DATE AND `pack_num` NOT IN(
                                            SELECT
                                                `pack_num`
                                            FROM
                                                `prod__pack_operation`
                                            WHERE
                                                `prod_line`= '$prodline' AND
                                                `prod__pack_operation`.`cur_date` < CURRENT_DATE
                                            GROUP BY
                                                `pack_num`
                                        )
                                        GROUP BY
                                            `prod_line`";
                                            $rsl= $con->query($quer);
                                            
                                            $tabl=[];
                                            while ($items = $rsl->fetch_assoc()){
                                                $tabl[]=$items;
                                            }
                                            
                                            $ieng = 0;
                                            $qengaged = 0;
                                            while ($ieng < count($tabl)) {
                                                    $qengaged =$tabl[$ieng]['qty_eng'];
                                                $ieng++;
                                            } 
                                            echo($qengaged);?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quantité Encours -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 ">
                                    <div class="h3 font-weight-bold text-success text-uppercase mb-3" style="text-align:center"> Quantité Encours </div>
                                    <div id="Encours" class="h2 font-weight-bolder text-gray-900" style="text-align:center"><?php
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
                                     AND `prod_line` = '$prodline'
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
                                            `prod__control`.`prod_line` = '$prodline' AND `prod__control`.`cur_date` = CURRENT_DATE
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
                                            while ($ienc < count($tab)) { if($tab[$ienc]['pack_qty']!=NULL){
                                                $qencours +=$tab[$ienc]['pack_qty'];} 
                                                else {
                                                    $qencours =0;
                                                }
                                                $ienc++;
                                            }
                                            echo($qencours-($qfab-1));?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ml-2 mr-2">

                <!-- Controle Qualité -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-danger text-uppercase mb-3" style="text-align:center"> Indice de contrôle Qualité </div>
                                    <div id="cq" class="h2 font-weight-bolder text-gray-900" style="text-align:center" ><?php

                                    echo(round($cq,2));
                    
                                    ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quantité Fabriqué -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-warning text-uppercase mb-3" style="text-align:center">Quantité Fabriquée </div>
                                    <div class="h2 font-weight-bolder text-gray-900" style="text-align:center" id="fab"><?php 
                                    
                                    echo ($qfab-1);

                                    ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ml-2 mr-2">

                <!-- Performance -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-secondary text-uppercase mb-3" style="text-align:center"> Rendement </div>
                                    <div class="h2 font-weight-bolder text-gray-900" style="text-align:center" id="perf"><?php

                                    $query = "SELECT `performance` 
                                    FROM `prod__prod_line_perf_hr` 
                                    WHERE `prod_line` = '$prodline' AND `cur_date` = CURRENT_DATE ORDER BY `id` DESC LIMIT 1";
                                    $rslt = $con->query($query);

                                    $tab3 = [];
                                    while ($item = $rslt->fetch_assoc()) {
                                        $tab3[] = $item;
                                    }

                                    $i3=0;
                                    $performance = 0;
                                    while ($i3 < count($tab3)) {
                                        $performance=$tab3[$i3]['performance'];
                                        $i3++;}
                                    echo($performance);

                                    ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Objectif -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-info text-uppercase mb-3" style="text-align:center"> Objectif </div>
                                        <div class="h2 font-weight-bolder text-gray-900" style="text-align:center" id="perf"><?php
                                        $query = "SELECT `prod__prod_line`.`objective`, `init__prod_line`.`prod_line`, `init__model`.`model` FROM `prod__prod_line` 
                                        INNER JOIN `init__prod_line` ON `prod__prod_line`.`prod_line_id`= `init__prod_line`.`id`
                                        INNER JOIN `init__model` ON `init__model`.`id`= `prod__prod_line`.`model_id`
                                        WHERE `prod__prod_line`.`cur_date`= CURRENT_DATE AND `init__prod_line`.`prod_line` = '$prodline' ORDER BY `prod__prod_line`.`id` DESC ";
                                        $rslt = $con->query($query);
                                            
                                        $tab4 = [];
                                        while ($item = $rslt->fetch_assoc()) {
                                            $tab4[] = $item;
                                        }
                                        $i3=0;
                                        $obj=0;
                                        if (count($tab4)>0) {
                                            for ($i=0; $i<count($tab4); $i++){
                                                echo $tab4[$i]['model'].': '.$tab4[$i]['objective'].'<br>' ;
                                            }
                                        }
                                        else {echo 0 ;}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--pied de la page-->
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><a class="h5" href="http://192.168.1.245/mahdco/digitaltwin/">DIGITAL TWIN</a></span></br>
                <span> Copyright &copy; DigiTex by Advantry X 2023 </span>
            </div>
        </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    </body>
</html>                 
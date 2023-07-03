<?php
require_once './php/config.php';

$output = "";

if (isset($_POST["submit"])) {

    $sql = "SELECT
            `prod__operator_perf_hr`.`prod_line`,
            `prod__operator_perf_hr`.`operator`,
            `init__employee`.`first_name`,
            `init__employee`.`last_name`,
            `init__employee`.`card_rfid`,
            `init__employee`.`qualification`,
            `prod__operator_perf_hr`.`performance`,
            `prod__operator_perf_hr`.`tot_qty`,
            `prod__operator_perf_hr`.`cur_date`,
            `prod__operator_perf_hr`.`cur_time`
            FROM
            `prod__operator_perf_hr`
            INNER JOIN `init__employee` ON `prod__operator_perf_hr`.`operator` = `init__employee`.`matricule` WHERE `prod__operator_perf_hr`.`cur_date`= CURRENT_DATE;";
    $res = mysqli_query($con, $sql);
    $pres = [];
    while ($item1 = $res->fetch_assoc())
    {
        $pres[] = $item1;
    }
    $output .= "
            <table class='table' bordered='1'>
                                
                <tr>
                    <th>Matricule</th>
                    <th>Nom et Prenom</th>
                    <th>Chaine de production</th>
                    <th>Performance en %</th>
                    <th>Performance en nbr des pieces</th>
                    <th>Date</th>
                    <th>Heure</th>
                </tr>
    ";
    for ($i=0; $i<count($pres); $i++){

            $output .= '
        <tr>
                                    <td>'. ($pres[$i]["operator"]).'</td>
                                    <td>'. ($pres[$i]["first_name"].' '.$pres[$i]["last_name"]).'</td>
                                    <td>'. ($pres[$i]["prod_line"]).'</td>
                                    <td>'. ($pres[$i]["performance"]).'</td>
                                    <td>'. ($pres[$i]["tot_qty"]).'</td>
                                    <td>'. ($pres[$i]["cur_date"]).'</td>
                                    <td>'. ($pres[$i]["cur_time"]).'</td>
                                    </tr>
        ';
    }

            $output .= '</table>';

            header('Content-Type:application/xls');
            header('Content-Disposition: attachment; filename=performance_par_heure.xls');

            echo $output;
        
}

if (isset($_POST["submit1"])) {

    $sql = "SELECT `prod__operator_perf`.`prod_line`, `prod__operator_perf`.`operator`, 
    `init__employee`.`first_name`, `init__employee`.`last_name`, `init__employee`.`card_rfid`, `init__employee`.`qualification`, 
    `prod__operator_perf`.`performance`, `prod__operator_perf`.`prod_time`, `prod__operator_perf`.`downtime`, `prod__operator_perf`.`cur_date`
    FROM `prod__operator_perf` 
    INNER JOIN `init__employee` ON `prod__operator_perf`.`operator`=`init__employee`.`matricule`";
    $res = mysqli_query($con, $sql);
    $pres = [];
    while ($item1 = $res->fetch_assoc())
    {
        $pres[] = $item1;
    }
    $output .= "
            <table class='table' bordered='1'>
                                
            <tr>
            <th>Matricule</th>
            <th>Nom et Prenom</th>
            <th>Chaine de production</th>
            <th>Temps de présence</th>
            <th>Temps perdu</th>
            <th>Performance</th>
            <th>Date</th>
            
        </tr>
    ";
    for ($i=0; $i<count($pres); $i++){

            $output .= '
        <tr>
                                    <td>'. ($pres[$i]["operator"]).'</td>
                                    <td>'. ($pres[$i]["first_name"].' '.$pres[$i]["last_name"]).'</td>
                                    <td>'. ($pres[$i]["prod_line"]).'</td>
                                    <td>'. ($pres[$i]["prod_time"]).'</td>
                                    <td>'. ($pres[$i]["downtime"]).'</td>
                                    <td>'. ($pres[$i]["performance"]).'</td>
                                    <td>'. ($pres[$i]["cur_date"]).'</td>
                                    </tr>
        ';
    }

            $output .= '</table>';

            header('Content-Type:application/xls');
            header('Content-Disposition: attachment; filename=performance_journaliere.xls');

            echo $output;
        
}

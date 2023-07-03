<?php
require_once './php/config.php';

// if(isset($_POST['Bouton'])) {
//   // Récupère les données du formulaire
//   $id = $_POST['id'];
//   $of = $_POST['of_num'];
//   $model = $_POST['model'];
//   $pack = $_POST['pack_num'];
//   $opcode = $_POST['operation_code'];
//   $designation = $_POST['designation'];

//   $sql = "DELETE FROM `p3_gamme` WHERE `model`='$model' AND `pack_num`='$pack' AND `of_num`='$of' AND `designation`='$designation' AND `operation_code`=$opcode";
//   $result = $con->query($sql);

//   $sql = "DELETE FROM `p4_pack_operation` WHERE `model`='$model' AND  `pack_num`='$pack' AND `of_num`='$of'AND `designation`='$designation' AND `operation_code`=$opcode";
//   $result = $con->query($sql);
   
//   // Redirige l'utilisateur vers la page précédente
//   header('Location: allgamme.php');
// }

if(isset($_POST['BoutonOf'])) {
  // Récupère les données du formulaire
  $id = $_POST['id'];
  $of = $_POST['of_num'];
  $client = $_POST['client'];
  $atelier = $_POST['asm_shop'];
  $ofstat = $_POST['of_state'];

  $sql1 = "DELETE FROM `prod__of` WHERE `id`='$id' AND `of_num`='$of' AND `client`='$client' AND `asm_shop`='$atelier' AND `of_state`='$ofstat'";
  $result1 = $con->query($sql1);
  $sql3 = "DELETE FROM `prod__pack_operation` WHERE `of_num`='$of'";
  $result3 = $con->query($sql3);
  // Redirige l'utilisateur vers la page précédente
  header('Location: ordreDeFab.php');
}

if(isset($_POST['Boutonpack'])) {
  // Récupère les données du formulaire
  $id = $_POST['id'];
  $pack=$_POST['pack_num'];
  $of = $_POST['of_num'];
  $tag = $_POST['tag_rfid'];
  $prod_line = $_POST['prod_line'];
  $size = $_POST['size'];
  $color = $_POST['color'];
  $qte = $_POST['quantity'];

  $sql1 = "DELETE FROM `prod__packet` WHERE `id`='$id' AND `pack_num`='$pack'";
  $result1 = $con->query($sql1);
  
  // Redirige l'utilisateur vers la page précédente
  header('Location: allpacks.php');
}
if(isset($_POST['Boutonoperat'])) {
  // Récupère les données du formulaire
  $id = $_POST['id'];
  $reg=$_POST['reg_num'];
  $name = $_POST['full_name'];
  $ctag = $_POST['card_id'];


  $sql1 = "DELETE FROM `init__employee`  WHERE `matricule`='$reg'";
  $result1 = $con->query($sql1);
  
  // Redirige l'utilisateur vers la page précédente
  header('Location: rh.php');
}
if(isset($_POST['Supoperation'])) {
  // Récupère les données du formulaire
  $id = $_POST['id'];
  $model = $_POST['model'];
  $opcode = $_POST['operation_num'];
  $designation = $_POST['designation'];
  $time = $_POST['unit_time'];
  $qte = $_POST['qte_h'];
  $Digitex = $_POST['smartbox'];

  $sqll="SELECT id FROM init__model WHERE model='$model'";
  $rslt= $con->query($sqll);
  $modelid = [];
    while ($item3 = $rslt->fetch_assoc())
    {
        $modelid[] = $item3;
    }

  $sql1 = "DELETE FROM `prod__gamme`  WHERE `id`=$id";
  $result1 = $con->query($sql1);
  
  // Redirige l'utilisateur vers la page précédente
  header('Location: equilibrage.php');
}
?>
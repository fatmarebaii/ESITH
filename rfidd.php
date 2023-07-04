<?php
// Connexion à la base de données
// $pdo = new PDO ('mysql:host=127.0.0.1; dbname=db_esith','root', 'x2Oi@q5K3Kaz');
$pdo = new PDO('mysql:host=127.0.0.1;dbname=digitex', 'root', '');
$rfid=null;
// Récupération de la valeur du champ "valeur"
$query = $pdo->query("SELECT `card_rfid` FROM `prod__affectation` WHERE `id`=1");
$rfid = $query->fetchColumn();
    // Renvoi de la rfid
    echo $rfid;
   
?>
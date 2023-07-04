<?php
// $con = mysqli_connect("127.0.0.1", "root", "x2Oi@q5K3Kaz", "db_esith");
$con = mysqli_connect("localhost", "root", "", "digitex");
if ($con) {
    // echo "DB connected";
} else {
    echo "DB connection is failed";
    exit();
}
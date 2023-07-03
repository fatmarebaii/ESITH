<?php
$con = mysqli_connect("54.38.32.161", "root", "x2Oi@q5K3Kaz", "db_esith");
// $con = mysqli_connect("localhost", "root", "", "digitex");
if ($con) {
    // echo "DB connected";
} else {
    echo "DB connection is failed";
    exit();
}
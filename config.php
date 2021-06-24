<?php
ob_start();

try {

    $con = new PDO("mysql:dbname=booking; host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    session_start();
}
catch(PDOExeption $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
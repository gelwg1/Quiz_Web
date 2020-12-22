<?php
$db_host = "localhost:3306";
$db_user = "root";
$db_password = "";
$db_name = "Registration";
try {

    $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

 ?>

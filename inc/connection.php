<?php 

try{
    $db = new PDO("mysql:host=localhost;dbname=trackit;port=3306","root","root");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected";

}catch (Exception $e) {
        echo "Unable to connect";
        exit;
}

?>

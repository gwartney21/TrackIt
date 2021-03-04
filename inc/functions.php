<?php

function add_job( $joblink,$jobdescription){
    include 'connection.php';
    
    $sql = 'INSERT INTO joblist(joblink, jobdescription) VALUES(?, ?)';
    
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $joblink, PDO::PARAM_STR);
        $results->bindValue(2, $jobdescription, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

?>
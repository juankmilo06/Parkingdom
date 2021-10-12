<?php

try{
    $conexion = new PDO('mysql:host=node38209-parkingdom.jelastic.saveincloud.net;dbname=parkingdom','root','GOLlmm69236');
    //echo "conexion Ok";
    
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>

<?php

function getAllProducts(){
    
$DBuser = "root";
$DBpassword = "";
$DBname = "camp";
$servername = "localhost";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$requete="Select * from adventure";
$resultat = $conn->query($requete);
$produits =$resultat ->fetchAll();
return $produits;




}







?>
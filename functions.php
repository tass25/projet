<?php

function getAllProducts(){
    
    $conn=connect();


$requete="Select * from destination";
$resultat = $conn->query($requete);
$produits =$resultat ->fetchAll();
return $produits;

}





function searchProduits($keywords){

    $conn=connect();
    


    $requete = "SELECT * FROM destination WHERE name LIKE '%$keywords%'";    $resultat = $conn->query($requete);
    $produits =$resultat ->fetchAll();
    return $produits;


}

function connect(){
    $DBuser = "root";
    $DBpassword = "0000";
    $DBname = "camp";
    $servername = "localhost";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


return $conn;

}

function getProduitById($id_destination){
    $conn =connect();
    $requete = "SELECT * FROM destination WHERE id_destination = $id_destination";
    $resultat = $conn->query($requete);
    $produit = $resultat->fetch();
    return $produit;
}

function connectVisiteur($data){
   $conn =connect();
   $email=$data['email'];
   $password=$data['password'];
   $requete="Select * from user where email='$email' AND password='$password' ";

$resultat=$conn->query($requete);
$user=$resultat->fetch();
return $user;

}



?>
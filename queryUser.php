<?php 
include "koneksi.php";

// Profil
$idPG = $_GET["id"];
$nipG = $_GET["nip"];
$namaG = $_GET["nama"];
$passwordG = $_GET["password"];
$roleG = $_GET["role"];

$idPP = htmlspecialchars($_POST["id"]);
$nipP = htmlspecialchars($_POST["nip"]);
$namaP =  htmlspecialchars($_POST["nama"]);
$passwordP = htmlspecialchars($_POST["password"]);
$roleP = htmlspecialchars($_POST["role"]);

$selectp = "SELECT * FROM user";
$deletep = "DELETE FROM user WHERE id = 'id'";
$updatep = "UPDATE user SET
                id = '$idPG',
                nip = '$nipG',
                nama = '$namaG',
                password  = '$passwordG',
                role = '$roleG'";
$insertp = "INSERT INTO user (id, nip, nama, password, role)
            VALUES ( '', '$nipP', '$namaP', '$passwordP', '$roleP')";
    
?>
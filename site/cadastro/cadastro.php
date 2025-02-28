<?php

 $dbhost = "localhost";
 $dbuser = "username";
 $dbpass = "password";
 $db = "dbname";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$tipo=$_POST['tipo'];
$id = $_POST['id'];
$cv=$_POST['cv'];
$ano=$_POST['ano'];
$telefone=$_POST['telefone'];
$modelo=$_POST['modelo'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$eq_user=$_SESSION["username"];
$link=$_POST['link'];
$linkiframe=$_POST['linkiframe'];
$qrcodelink=$_POST['qrcodelink'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$sql1=mysqli_query($conn, "INSERT INTO respostas (eq_user, tipo, modelo, cv, ano, estado, cidade, telefone, link, latitude, longitude, linkiframe, qrcodelink)VALUES('$eq_user', '$tipo', '$modelo', '$cv', '$latitude', '$longitude', '$ano', '$estado', '$cidade', '$telefone', '$link', '$linkiframe', '$qrcodelink')");
    
?>
<html><meta http-equiv="refresh" content="0; url=https://carlitoslocacoes.com/site/meusequipamentos.php" /></html>

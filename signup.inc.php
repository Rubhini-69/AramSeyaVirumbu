<?php

include_once 'dbh.inc.php';

$rename = $_POST['rename'];
$recontact = $_POST['recontact'];
$reage = $_POST['reage'];
$recategory = $_POST['recategory'];
$renum = $_POST['renum'];
$reneed = $_POST['reneed'];
$readdress = $_POST['readdress'];
$relocation = $_POST['relocation'];

$sql = "INSERT INTO details (userName, userContact, neAge, neCategory, neNum, neNeed, neAddress, neLocation) VALUES ('$rename', '$recontact', '$reage', '$recategory', '$renum', '$reneed', '$readdress', '$relocation');";
mysqli_query($conn, $sql);


header("Location: ../AFWMS.php");
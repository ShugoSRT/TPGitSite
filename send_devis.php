<?php
include("connexion.php");

$nom = $_POST['nom'];
$date = $_POST['date'];
$number = $_POST['number'];
$message = $_POST['message'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$VAT = $_POST['VAT'];
$taxes = $_POST['taxes'];

echo ($nom.' '.$date.' '.$number.' '.$message.' '.$amount.' '.$price.' '.$VAT.' '.$taxes);
$insert="INSERT INTO `devis` (`id`, `idcontact`, `date`, `numero`, `description`, `qti`, `prixht`, `tva`, `prixtc`) VALUES (NULL, '$nom', '$date', '$number', '$message', '$amount', '$price', '$VAT', '$taxes');";

echo '<br>'.$insert.'<br>';

$conn->exec($insert);

header('Location: devis.php');
?>
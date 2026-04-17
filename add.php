<?php
include "db.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

mysqli_query($conn, "INSERT INTO etudiants(nom, prenom) VALUES('$nom', '$prenom')");

header("Location: index.php");
?>

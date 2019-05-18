<?php 
include "module.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
extract($_POST);
ajouter_produit($libelle,$prix);
//redirection vers index.php
//header("location:index.php");
echo "produit $libelle est ajoute avec succes";
?>
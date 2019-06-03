<?php 
include "module.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
//var_dump($_FILES['photo']);
//die();
 $chemin=televerser($_FILES['photo']);
 
extract($_POST);
ajouter_produit($libelle,$prix,$chemin);
//redirection vers index.php
header("location:index.php");
echo "produit $libelle est ajoute avec succes";
?>
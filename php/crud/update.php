<?php 
include "module.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
extract($_POST);
modifier_produit($id,$libelle,$prix);
//redirection vers index.php
header("location:index.php");
?>
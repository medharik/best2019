<?php
include "module.php";
//$id=$_GET['id'];
extract($_GET);//$id=3
supprimer_produit($id);
header("location:index.php");
?>
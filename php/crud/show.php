<?php 
include "module.php";
extract($_GET);
$produit=find($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template</title>
    <?php include "_css.php";?>
</head>
<body>
<?php include "_menu.php";?>
<h3 class="alert alert-info text-center">
    Consultation du fiche produit 
</h3>
    
<div class="card mx-auto" style="width: 400px;">
  <img style="max-width:100%" class="img-fluid"  src="http://lorempixel.com/400/400/technics/<?php echo rand(1,10)?>/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['libelle'];?></h5>
   </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Prix: <?php echo $produit['prix'];?>DHS </li>
  </ul>
  <div class="card-body">
   
    <a href="#" onclick="history.back()" class="card-link">Retour</a>
  </div>
</div>

        <?php include "_js.php";?>

</body>
</html>
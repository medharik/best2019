<?php 
include "module.php";
$produits=all();
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
    <div class="container">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libellé</th>
      <th scope="col">prix</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($produits as $p) {
  ?>
    <tr>
      <th scope="row">
      <?php echo $p['id'];?>
      </th>
      <td> <?php echo $p['libelle'];?></td>
      <td> <?php echo $p['prix'];?></td>
      <td><a href="" class="btn btn-sm btn-danger">Supprimer</a>
      <a href="" class="btn btn-sm btn-warning">Modifier</a>
      <a href="" class="btn btn-sm btn-info">Consulter</a></td>
    </tr>
  <?php } ?>


    </tbody>

</table>
    
        </div>
    </div>


        <?php include "_js.php";?>

</body>
</html>
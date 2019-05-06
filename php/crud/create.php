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
<br>
<h3 align="center">Nouveau produit</h3>
<div class="container" class="b">
<div class="row">
<div class="col-md-6 mx-auto shadow">
<form action="store.php"  method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Libellé</label>
    <input type="text" required  name="libelle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prix : </label>
    <input type="numeber" name="prix" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

</div>
</div>
</div>




        <?php include "_js.php";?>

</body>
</html>
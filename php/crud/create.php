<?php 
$x=5;
$y=2;
$a= $x|$y;
echo $a;
var_dump($a);
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
<br>
<h3 align="center">Nouveau produit</h3>
<div class="container" class="b">
<div class="row">
<div class="col-md-6 mx-auto shadow">
<form action="store.php"  method="post"  >
  <div class="form-group">
    <label for="exampleInputEmail1">Libellé</label>
    <input type="text" required id="libelle"  name="libelle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter label">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prix : </label>
    <input type="numeber" id="prix" name="prix" class="form-control" id="exampleInputPassword1" placeholder="prix">
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
  <button type="button" onclick="save()" class="btn btn-primary">Valider AJAX</button>
</form>

</div>
</div>
</div>




        <?php include "_js.php";?>
<script>

function save(){
alert($('#prix').val());
  $.ajax({
  method: "POST",
  url: "store.php",
  data: { libelle: document.getElementById('libelle').value, prix: $('#prix').val() }
})
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });}

</script>
</body>
</html>
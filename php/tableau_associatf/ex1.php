<?php
// on initialise un tab associatif
$produit=array('libelle'=>'hp dv7','prix'=>5600,'marque' =>'HP');
//pour ajouter d'autres elements au tableau
$produit['config']='core i5 , dd 700GO, ...';
$produit['couleur']="red";
?>
<!DOCTYPE html>
<html>
<head>
	<title>les tabs associatifs</title>
</head>
<body>
<?php 
$taille= count($produit);
?>
On a <?php echo $taille;?> infos
<hr>


<ul>
<?php foreach ($produit as $c => $v): ?>

	<?php
	 if ($c=='prix') {
		$devise="DHS";
		}else {
			$devise=".";
		}
if ( is_numeric($v)) {
	$style="style=\"color:red\" il s\"appelle on\"eal ";
}else{
	$style='style="color:black"';
}

if ($c=='prix' ) {
	$d=$v/10;
	$d="$d $";
	//$d.="$";
}else{
	$d="";
}

?>
	
	<li <?php echo $style ?>>
		<?php echo $c; ?> est <?php echo $v; ?><?php echo  $devise; ?>
		, <?php echo  $d; ?>
	</li>
<?php endforeach ?>
 </ul>

</body>
</html>
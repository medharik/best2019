<?php 
extract($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if( is_numeric($prix) && $prix >0 && is_numeric($qte) && $qte >0 )  { 
    $tht=$prix*$qte;    
    ?>
    Le tht est : <?php echo $tht;?> DHS

        <?php  } else { ?>

les valeurs doivent etre numeriques et positives
            <?php } ?>
</body>
</html>
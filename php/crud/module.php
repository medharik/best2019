<?php
function connecter_db(){
$servername = "localhost";
$username = "root";
$password = "";
$db="dbproduit";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";

return $conn;
    }
catch(PDOException $e)
    {
    echo "Erreur de connexion: " . $e->getMessage();
    }


}
function ajouter_produit($libelle,$prix){

$cnx=connecter_db();
$rp=$cnx->prepare("insert into produit(libelle,prix) values(?,?)");
$rp->execute(array($libelle,$prix));
}


function supprimer_produit($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare("delete from produit where id=?");
    $rp->execute(array($id));
}
//supprimer_produit(1);
function modifier_produit($id, $libelle,$prix){
    $cnx=connecter_db();
    $rp=$cnx->prepare("update produit set libelle=?, prix=? where id=? ");
    $rp->execute(array($libelle,$prix,$id));
}

function all(){
    
    $cnx=connecter_db();
    $rp=$cnx->prepare(" select * from produit  ");
    $rp->execute(array());
    $liste_produits=$rp->fetchAll();
    return $liste_produits;
}
function find($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare(" select * from produit where id=?  ");
    $rp->execute(array($id));
    $produit=$rp->fetch();
    return $produit;
}

?>
<?php
session_start();

if(isset($_SESSION['panier']) && !empty($_SESSION['panier'])){

$total_global = 0;

echo "<table border='1'>";
echo "<tr><th>produit</th><th>quantite</th><th>prix unitaire</th><th>total</th></tr>";

foreach($_SESSION['panier'] as $item){

$total_ligne = $item['qte'] * $item['prix'];
$total_global += $total_ligne;

echo "<tr>";
echo "<td>".$item['nom']."</td>";
echo "<td>".$item['qte']."</td>";
echo "<td>".$item['prix']."</td>";
echo "<td>".$total_ligne."</td>";
echo "</tr>";
}

echo "</table>";

echo "montant total a payer : $total_global";

}else{
    echo "panier vide";
echo "<a href='index.php'>retourner a la boutique</a>";
}
?>
<?php
session_start(); 
// Démarre la session pour pouvoir utiliser $_SESSION['panier']

if(isset($_SESSION['panier']) && !empty($_SESSION['panier'])){
    // Vérifie si le panier existe et qu'il contient au moins un produit

    $total_global = 0; 
    // Initialise le total global à 0 avant de calculer la somme de tous les articles

    echo "<table border='1'>";
    echo "<tr><th>produit</th><th>quantite</th><th>prix unitaire</th><th>total</th></tr>";
    // Création de l'en-tête du tableau HTML pour afficher le panier

    foreach($_SESSION['panier'] as $item){
        // Parcourt chaque produit du panier

        $total_ligne = $item['qte'] * $item['prix']; 
        // Calcule le total pour ce produit (quantité * prix unitaire)

        $total_global += $total_ligne; 
        // Ajoute le total de ce produit au total global

        echo "<tr>";
        echo "<td>".$item['nom']."</td>"; 
        // Affiche le nom du produit
        echo "<td>".$item['qte']."</td>"; 
        // Affiche la quantité commandée
        echo "<td>".$item['prix']."</td>"; 
        // Affiche le prix unitaire
        echo "<td>".$total_ligne."</td>"; 
        // Affiche le total pour ce produit
        echo "</tr>";
    }

    echo "</table>";
    // Ferme le tableau HTML

    echo "montant total a payer : $total_global"; 
    // Affiche le montant total à payer pour tous les produits du panier

} else {
    // Si le panier est vide ou n'existe pas
    echo "panier vide"; 
    // Message pour indiquer que le panier est vide
    echo "<a href='index.php'>retourner a la boutique</a>"; 
    // Lien pour retourner à la page principale de la boutique
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
        <style>body{
            background: #c5e7e7;;
            padding: 40px;
        }
        select,input,button{
padding:6px;
margin:5px;
}

table{
border-collapse:collapse;
width:100%;
}
button:hover{
background:#2980b9;
}
</style> 
</head>
<body>
 
</body>
</html>



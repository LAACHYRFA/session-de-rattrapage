<?php
session_start();
// lire contenu de json
$json = file_get_contents("data.json");

// convertir json en tableau
$produits = json_decode($json, true);

// verifier button
if (isset($_POST['ok'])) {
    $qte = $_POST['qte'];
    $selection = $_POST['select'];

    if (empty($qte) || $qte <= 0) {
        echo "entrer les informations";
    } else {
        // Parcourir tous les produits 
        foreach ($produits as &$produit) {
            if ($produit['nom'] === $selection) {
                // verifier si la qte est inferieure a la qte en stock 
                if ($qte > $produit["stock"]) {
                    echo "la quantité saisie est superieure à la quantité en stock :" . $produit["stock"];
                } else {
                    // stocker dans session 
                    $_SESSION['panier'][] = [
                        "nom" => $produit['nom'],
                        "prix" => $produit['prix'],
                        "qte" => $qte
                    ];

                    // Naqqas mn stock
                    $produit['stock'] -= $qte;
                    
                    
                    // Refresh
                  
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <style>
        body{
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
    <form method="POST">
      <select name="select">
<option value="téléphone">Téléphone</option>
<option value="casque">Casque</option>
<option value="tablette">Tablette</option>
<option value="montre connectee">Montre connectee</option>
</select>
        qte: <input type="number" name="qte">
        <button name="ok">ok</button>
        
    </form>

    <table border='2'>
        <tr>
            <th>produit</th>
            <th>quantite</th>
            <th>prix</th>
            <th>total</th>
        </tr>

        <?php
        if (isset($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $panier) {
                echo "<tr>";
                echo "<td>" . $panier["nom"] . "</td>";
                echo "<td>" . $panier["qte"] . "</td>";
                echo "<td>" . $panier["prix"] . " DH</td>";
                echo "<td>" . ($panier["qte"] * $panier["prix"]) . " DH</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <br>
    <a href="facture.php">visualiser la facture</a>
</body>
</html>
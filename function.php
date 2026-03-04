<?php

function calculerPrix($qte , $prix) {
    $total = $qte * $prix;
    $reduction = $total * 0.10;
    return $total - $reduction;  
}

if(isset($_POST["ok"])){

    $qte = $_POST["qte"];
    $prix = $_POST["prix"];

    if(empty($qte) || empty($prix)){
        echo "Remplir les champs";
    } else {
        $resultat = calculerPrix($qte , $prix);
        echo "Total after reduction: " . $resultat;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>

<form method="POST">
qte : <input type="number" name="qte">
prix : <input type="number" name="prix">
<button name="ok">ok</button>
</form>

</body>
</html>
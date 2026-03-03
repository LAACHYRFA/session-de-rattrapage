<?php
$students = [
    ["nom"=>"Ahmed", "prenom"=>"Ali", "note1"=>12, "note2"=>15, "note3"=>18],
    ["nom"=>"Sara", "prenom"=>"Yasmine", "note1"=>9, "note2"=>14, "note3"=>10],
    ["nom"=>"Omar", "prenom"=>"Karim", "note1"=>16, "note2"=>17, "note3"=>15],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Tableau des étudiants</title>
</head>
<body>
 <table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Note 1</th>
        <th>Note 2</th>
        <th>Note 3</th>
        <th>Moyenne</th>
    </tr>
    <?php
    foreach($students as $student){
        echo "<tr>";
        echo "<td>" . $student["nom"] . "</td>";
        echo "<td>" . $student["prenom"] . "</td>";
        echo "<td>" . $student["note1"] . "</td>";
        echo "<td>" . $student["note2"] . "</td>";
        echo "<td>" . $student["note3"] . "</td>";
        $moyenne = ($student["note1"] + $student["note2"] + $student["note3"]) / 3;
        echo "<td>$moyenne</td>";

        echo "</tr>";
    }
    ?>
 </table>
</body>
</html>
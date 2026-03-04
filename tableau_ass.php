<?php
$students = [
    ["nom"=>"Ahmed", "prenom"=>"Ali", "notes"=>[12,15,18]],
    ["nom"=>"Sara", "prenom"=>"Yasmine", "notes"=>[9,14,10]],
    ["nom"=>"Omar", "prenom"=>"Karim", "notes"=>[16,17,15]],
];
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Tableau des étudiants</title>
</head>
<body>

<table border="1">
<tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Note 1</th>
    <th>Note 2</th>
    <th>Note 3</th>
    <th>Moyenne</th>
</tr>

<?php
foreach($students as $student){
    echo "<tr>";

    echo "<td>".$student["nom"]."</td>";
    echo "<td>".$student["prenom"]."</td>";

    echo "<td>".$student["notes"][0]."</td>";
    echo "<td>".$student["notes"][1]."</td>";
    echo "<td>".$student["notes"][2]."</td>";

    $moyenne = array_sum($student["notes"]) / count($student["notes"]);
    echo "<td>".$moyenne."</td>";

    echo "</tr>";
}
?>

</table>

</body>
</html>
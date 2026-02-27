<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="" method="post">
<input type="number" name="number">
<button name="ok">ok</button>
 </form>
<ul>
<?php
if(isset($_POST['number'])){
 $number = $_POST['number'];
 $i = 1;
 while($i <= $number){
  if($number % $i == 0){
   echo "<li>$i</li>";
  }
  $i++;
 }
}


</ul>
</body>
</html>
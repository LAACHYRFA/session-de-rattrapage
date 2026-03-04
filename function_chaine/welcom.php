<?php
session_start();
if(!isset($_SESSION['email'])){
 header("Location: singUp.php");
 exit;
}
$email = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h2>welcom !</h2>
 <?php echo $email;?>
 <form action="" method="post">
  <button type="submit" name="logout">deaconecte</button>
 </form>

</body>
</html>
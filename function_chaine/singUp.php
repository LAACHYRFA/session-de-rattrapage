<?php
session_start();

function validation($email, $password, $validation_password){
    $domain = "@ofppt.ma";

    if(substr($email, strlen($email)-strlen($domain)) !== $domain){
        return "Email incorrect";

    } elseif(strlen($password) < 8){
        return "Le mot de passe doit contenir au moins 8 caractères";

    } elseif(!preg_match("/[A-Z]/",$password)){
        return "Le mot de passe doit contenir au moins une majuscule";

    } elseif(strpbrk($password, '0123456789')===false){
        return "Le mot de passe doit contenir au moins un chiffre";

    } elseif($password !== $validation_password){
        return "Les mots de passe ne correspondent pas";
        
    } else{
        return true;
    }
}

$error = "";
if(isset($_POST['ok'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmation = $_POST['confirm_password'];

    $result = validation($email, $password, $confirmation);

    if($result === true){
        $_SESSION['email'] = $email;
        header("Location: welcome.php");
        exit();
    } else {
        $error = $result;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
</head>
<body>
<?php if($error) echo $error; ?>

<form action="" method="POST">
Email: <input type="email" name="email"required ><br>
Mot de passe: <input type="password" name="password" required><br>
Confirmer le mot de passe: <input type="password" name="confirm_password" required><br>
<button type="submit" name="ok">ok</button>
</form>
</body>
</html>
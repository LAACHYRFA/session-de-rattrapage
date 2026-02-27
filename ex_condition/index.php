<?php
if(isset ($_POST["ok"])){
    $note=$_POST["note"];

if(empty($note)){
    echo"note vide";
} else{
   if( is_numeric($note) && $note<=20 && $note>=0){
    if($note>=10 ){
        echo"vous etes admis";
        
    }
    else{
        echo"vous etes pas admis";
    }
   }else{
    echo"Note invalide !!";
   }
}
}
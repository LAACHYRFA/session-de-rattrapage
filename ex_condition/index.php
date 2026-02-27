<?php
if(isset($_POST["ok"])){
  $note = $_POST["note"];
 if(empty($note)){
  echo "remplier les champs";
 }elseif($not>=10){
  echo "vous etes admis";
 }else {
  echo "vous etes pas admis";
 }
}

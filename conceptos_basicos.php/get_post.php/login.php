<?php
session_start();
require_once "./data_base/db.php";

if ((isset($_POST["user"]) && !empty($_POST["user"])) && (isset($_POST["password"]) && !empty($_POST["password"]))){
   $row = 0;
   $useR = $_POST["user"];
   $pssw = $_POST["password"];

   foreach ($_users as $userr){
      if ($userr["user_log"] == $useR && $userr["password"] == $pssw){
         $row = 1;
         break;
      }
   }
   if ($row == 1){
      $_SESSION["user_log"] = $userr;
      setcookie("user", $userr["user_log"], time() + 3600);
      header("location: sesion_iniciada.php");
      }
   else{
      echo "Usuario o contraseña invalidos";
   }
}
else{
   echo"No pueden haber campos vacios";

}
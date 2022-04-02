<?php


require_once('../config.php');




if(isset($_SESSION['admin_name']))
{

session_destroy();


header("location:". BURLA .'login.php');

} 

else{

   echo$_SESSION['admin_name'];


   // header("location:".BURLA.'');

   echo"dddddddddd";
}
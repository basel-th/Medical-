<?php

session_start();

$_SESSION['admin_name']="basel";

// NOTES  YOU MUST CHANGE THE LINKS TO  DEPEND ON YOUR PATH   

define("BURL","http://localhost:82/php/medical/");
define("BURLA","http://localhost:82/php/medical/admin/");
define("ASSETS","http://localhost:82/php/medical/assets/");

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');




// CONNECT TO DATABASE BY BASEL AHMED 

require_once(BL.'function/db.php');
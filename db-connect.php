<?php
include ("site.php");

/*** Dev site  ***/
define("DB_SERVER","localhost");
define("DB_NAME","weekplanner");
define("DB_USER","root");
define("DB_PASS","");

/*** This is for the live site ***/
/*
define("DB_SERVER","matthewcare.org.mysql");
define("DB_NAME","matthewcare_org");
define("DB_USER","matthewcare_org");
define("DB_PASS","matthewcareHS1982");
*/

define("TBL_DATA", "data");
define("TBL_LOGIN", "login");

$db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

?>

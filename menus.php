<?php 
include "header.php"; 
if ( !$sess->isLoggedIn() ) {
      header ("Location: login.php");
}
?>

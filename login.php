<?php include ("header.php");
 
//session_start();	
if ( $sess->isLoggedIn() ) {
	$sess->isLoggedIn();
}
?>

<html>
<form action="process_login.php" method="POST" name="login_form">
    <p><label>Username : </label>
    <input id="email" type="text" name="username"  /></p>
     <p><label>Password : </label>
     <input id="password" type="password" name="password"  /></p>
	<input type="submit" value="Login"  />
</form>


</html>

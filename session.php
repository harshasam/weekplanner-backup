<?php
include ("functions.php");

class Session {
	var $isLoggedIn = false;
	var $username = ""; 
	//$_SESSION["loggedIn"] = false;
	
	function logIn($u,$p) {
			global $db;
			
			$res = $db->query("select * from ".TBL_LOGIN." where username = '$u' ; ");
			//echo "select * from ".TBL_LOGIN." where username = '$u' ; ";
			if ( $res->num_rows > 0 ) {
				$row = $res->fetch_assoc() ;
				//if ( $p == hash("sha512", $row["password"]) ) {
				if ( $p == $row["password"] ) {	
					session_start(); 
					$_SESSION["username"] = $u;
					header ("Location: index.php");
				} else {
					$this->isLoggedIn = false;
					echo "Wrong password!!! </br></br>";
					echo "Go back to <a href=\"login.php\">login page</a>";
				}
			} 			
	}
	
	function logOut () {
		// Unset all session values
        	$_SESSION = array();
        	session_destroy();
        	header ("Location: login.php");
    	}

	
	function isLoggedIn() {
	//	echo "function isLoggedIn()</br>";
	//	echo "logged in?".$this->isLoggedIn."</br>" ;
	//	echo "logged in?".$_SESSION["username"]."</br>";
		
		if ( isset($_SESSION["username"]) ) {
			//echo "<div class=\"hello\">You are logged in as ".ucfirst($_SESSION["username"])."</div>" ;
			return true;
		} else {
			return false;
		}
		
	}
	
}


$sess = new Session();
?>

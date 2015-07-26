<?php session_start();
ob_start();
include ("session.php"); 
?>

<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" />

Testing repository in header !!!!!!!
	
		<div id="top-nav">
			<ul>
				<li>
					<a href="index.php">Planner</a>
				</li>
				<li>
					<a href="shopping.php">Shopping</a>
				</li>
				<li>
					<a href="menus.php">Menus</a>
				</li>
			</ul>
		</div>
		</br>
		<div class="hello">
		<?php 
		if ( $sess->isLoggedIn() ) { 
			echo "You are logged in </br>" ;  
		} 
		?>
		</div>
		</br></br>

</head>
</html>

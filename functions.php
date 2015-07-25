<?php

include("db-connect.php");

	function updateCellData($cell,$data) {
		global $db;
		
		$data = str_replace("'","\'",$data);
		$data = str_replace("Â","",$data);
		// Removes empty spaces at the beginning
 		$data = ltrim($data);
		
		$res = $db->query("update ".TBL_DATA." set ".$cell." = '$data' ; ");
	}
	
	function getCellData($cell) {
		global $db;
		
		$res = $db->query("select * from ".TBL_DATA." ");
		//echo "select * from ".TBL_DATA." ";
		while ( $row = $res->fetch_assoc() ) {
			return $row[$cell];
		}
	}
	
	// Currently not being used
	function decryptIt( $q ) {
		$cryptKey = "qJB0rGtIn5UB1xG03efyCp";
		$qDecoded = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
		return $qDecoded ;
	}
	
?>

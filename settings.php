<?php
include("db-connect.php");

class functions {
	
	function updateCellData($cell,$data) {
		global $db;
		$res = $db->query("update ".TBL_DATA." set ".$cell." = '$data' ; ");
	}
	
	function getCellData($cell) {
		global $db;
		$res = $db->query("select * from ".TBL_DATA." ");
		while ( $row = $res->fetch_assoc() ) {
			return $row[$cell];
		}
	}
}

$fun = new functions();
?>

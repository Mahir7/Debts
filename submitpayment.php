<?php

include("config.php");
include("functions.php");

if ($_POST['submit']){
		
		$check = $_POST['check'];

	
	foreach($check as $ch){
			include("config.php");
			mysql_select_db('al khayam');
			$sql = "UPDATE `transection` SET `status`=1 WHERE `ID`=$ch ";
			mysql_query( $sql, $conn );
		}
		mysql_close($conn);
	}




?>
<script>
window.location = "makepayment.php";</script>

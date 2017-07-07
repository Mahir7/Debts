 <?php

if( $_POST ){
	include "config.php";
	mysql_select_db('al khayam');
	$type=$_POST['make_text'];
	$result = mysql_query( "SELECT TypeID FROM application WHERE type = '$type'", $conn );
	while ($row = mysql_fetch_array($result)) {
		$TypeID = $row["TypeID"];
	}
	
  	$person = $_POST['select'];
  	$date = $_POST['date'];
	$quantity = $_POST['quantity'];	
  	$total = $_POST['total'];
  	$amount = $_POST['amount'];

	  $sql = "INSERT INTO `transection`(`ID`, `NameID`, `date`, `TypeID`, `amount`, `quantity`, `total`) VALUES (NULL,'$person','$date','$TypeID','$amount','$quantity','$total')";
 $retval = mysql_query( $sql, $conn );
	
	echo "Thanks for adding this transection ;) !!!!". "<a href='index.php'>Click Here to return Home</a>";
}
  mysql_close($conn);
?>
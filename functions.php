<?php

function get_option($table,$value,$option){
include "config.php";
$sql2 = "SELECT * FROM $table";
mysql_select_db('al khayam');
$retval2 = mysql_query( $sql2, $conn );
 while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC)) {
	 echo '<option value ="'.$row2[$value].'">'.$row2[$option].'</option>';
	}
}
function get_trasections($filter,$output,$status,$status2){

	include("config.php");
	$sql = "SELECT transection.ID, person.name, DATE_FORMAT(date, '%d-%m-%Y') date, application.type, transection.amount,transection.quantity,transection.total, transection.status FROM transection JOIN person ON person.NameID = transection.NameID JOIN application on transection.TypeID = application.TypeID WHERE person.NameID = $filter order by transection.ID ";
	mysql_select_db('al khayam');
	$retval = mysql_query( $sql, $conn );
	 
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		if($row['status'] == $status or $row['status'] == $status2){
		echo "<tr class='content'>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				echo "<td class='quantity2'>" . $row['quantity'] . "</td>";
				echo "<td class='total2'>" . $row['total'] . "</td>";
				if($output=='$row["status"]'){
					echo "<td>" .$row['status']. "</td>";
				}else if($output=='checkbox') {
					echo "<td>
					<input type='checkbox' value=" . $row['ID'] . " id='checkbox" . $row['ID'] . "' name='check[]'>
					<label for='checkbox" . $row['ID'] . "'></label></td>";
					}
				}
				echo "</tr>";
	  }
	}
function get_sum($sum){
	
	include("config.php");
	$sql = "SELECT SUM($sum) FROM transection  WHERE NameID = NameID";
	mysql_select_db('al khayam');
	$retval = mysql_query( $sql, $conn );
	 while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		echo "<tr>";
          		echo "<td>" . $row['SUM('.$sum.')'] . "</td>";
            echo "</tr>";
	  }
}





















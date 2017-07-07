 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "al khayam";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

// Check connection
           if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
?>
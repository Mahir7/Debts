
      <?php
	     include("header.php");
         if(isset($_POST['add'])) {
      
			include("config.php");
			  
            if(! get_magic_quotes_gpc() ) {
               $name = addslashes ($_POST['name']);
               $mobile = addslashes ($_POST['mobile']);
			   $sheikhoffice = addslashes ($_POST['sheikhoffice']);
            }else {
               $name = $_POST['name'];
               $mobile = $_POST['mobile'];
			   $sheikhoffice = $_POST['sheikhoffice'];
            }
            
          $sql = "INSERT INTO person ". "(NameID, name, mobile, sheikh_office) ". "VALUES(NULL,'$name', '$mobile','$sheikhoffice')";
               
            mysql_select_db('al khayam');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            echo "<a href='index.php'>Return to the Main Page</a>";
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2" align="center">
                  
                     <tr>
                        <td width = "140" height="45">Name</td>
                        <td width="249"><input name = "name" type = "text"></td>
                     </tr>
                  
                     <tr>
                        <td width = "140" height="37">Mobile</td>
                        <td><input name = "mobile" type = "text"></td>
                     </tr>
                   <tr>
                        <td width = "140" height="40">Sheikh's Office Name</td>
                        <td><input name = "sheikhoffice" type = "text"></td>
                    </tr>
                   <tr>
                     <td height="76"></td>
                     <td><input name = "add" type = "submit" id = "add" value = "Add Person"></td>
                   </tr>
                  
                  </table>
               </form>
            
       <?php
		include("footer.php");
         }
      ?>

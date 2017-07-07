
      <?php
		 include("header.php");
         if(isset($_POST['add'])) {
           
		include("config.php");
            
            if(! get_magic_quotes_gpc() ) {
               $type = addslashes ($_POST['type']);
               $amount = addslashes ($_POST['amount']);
            }else {
               $type = $_POST['type'];
               $amounts = $_POST['amount'];
            }
            
          $sql = "INSERT INTO application ". "(TypeID,type, amount) ". "VALUES('', '$type','$amount')";
               
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
            <main>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" cellpadding = "2" align="center">
                  
                     <tr>
                        <td width = "100">Application Type</td>
                        <td><input name = "type" type = "text"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Application Amount</td>
                        <td><input name = "amount" type = "text"></td>
                     </tr>
                   <tr>
                        <td width = "100" height="48"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" value = "Add Application Type">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            </main>
            <?php
		include("footer.php");
         }
      ?>
   
   </body>
</html>



































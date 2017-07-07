
<?php
include("header.php");
include("config.php");
include("functions.php");
?>
  <main>
    <blockquote>
      <form method="POST" action="transectionsubmit.php">
        <table width="391" border="0" align="center">
          <tr>
            <td width="133" height="44">Name</td>
            <td width="183">
              <select  id='select' class="form-control" name ="select" >
                <option value="0">select</option>
                <?php echo get_option("person","NameID","name"); ?>
              </select>
            </td>
          </tr>
          <tr>
            <td height="35">Date</td>
            <td><input type="date" name="date" id="date"></td>
          </tr>
          <tr>
            <td height="37">Quantity</td>
            <td><input type="text" name="quantity" id="quantitytextfield" onChange="myFunction()"></td>
          </tr>
          <tr>
            <td height="36">Application Type</td>
            <td><select id="mySelect" class="form-control" onchange="myFunction()">
              <option>select</option>
              <?php echo get_option("application","amount","type"); ?>
            </select></td>
            <input id="make_text" type = "hidden" name="make_text" value = "" />   
          </tr>
          <tr>
            <td height="34">Amount</td>
            <td><input type=text id="amountLabel" name="amount"></input></td>
          </tr>
          <tr>
            <td height="38">Total</td>
            <td><input type=text id="total" name="total"> </input>
            &nbsp;</td>
          </tr>
          <tr>
            <td height="48">&nbsp;</td>
            <td><input type="submit" name="submit" class="form-control"  value="Submit"></td>
          </tr>
        </table>
  </form>
    </blockquote>
</main>
<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("amountLabel").value =x;
	var y = document.getElementById("quantitytextfield").value;
	document.getElementById("total").value =x*y;
	var e = document.getElementById("mySelect");
	var strUser = e.options[e.selectedIndex].text;
	document.getElementById("make_text").value=strUser;
}
</script>
<?php
 mysql_close($conn);
include("footer.php");
?>
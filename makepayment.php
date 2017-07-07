

<?php
include("header.php");
include("config.php");
include("functions.php");
?>
<div id="appquantity"class="alert alert-success" role="alert">
	Total Application:
	<?php
	get_sum("quantity");
		?>
</div>
<div id="totalDebt"class="alert alert-danger" role="alert">
	Total Debt:
	<?php
	get_sum("total");
		?>
</div>
<form method="POST" action="submitpayment.php">
	<div class="panel panel-default">
	  <div class="panel-heading">Make Payment </div>
	<table  class="table">
	  <tbody id="list">
		<tr class="content">
		  <td>#</td>
		  <td>Name <select id="filterText" class="form-control" name="filter" onchange="filterText1()">
			<option>
				All Debts
			</option>
			<?php
			echo get_option('person','name','name');
			?>
		</select></td>
		  <td>Date</td>
		  <td>Application</td>
		  <td>Amount</td>
		  <td>Quantity</td>
		  <td>Total</td>
		  <td id="payment">Payment Status</td>
		</tr>
		<?php echo get_trasections("person.NameID",'checkbox',0,0); ?>
	  </tbody>
	</table>
	
</div>
<input type="submit" name="submit">
</form> 
<?php
mysql_close($conn);
include("footer.php");
?>
<script>
function filterText1(){  
		var rex = new RegExp($('#filterText').val());
		if(rex =="/All Debts/"){clearFilter1()
			}else{
			$('.content').hide();
			$('.content').filter(function() {
			return rex.test($(this).text());
			}).show();
	        }
			var sum = 0;
			var sum2 = 0;
			$('.total2:visible').each(function(){
			sum += Number($(this).text());
			});
			$('.quantity2:visible').each(function(){
			sum2 += Number($(this).text());
			});
			$('#totalDebt','#appquantity').html("");
			$('#totalDebt').html("Total Debt: "+ sum);
			$('#appquantity').html("Total Application: "+ sum2);
	}
	
function clearFilter1()
	{
		$('.filterText').val('');
		$('.content').show();
	}
</script>
  
 















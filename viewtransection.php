

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

<div class="panel panel-default">
  <div class="panel-heading">Transections  </div>
<table  class="table">
  <tbody id="list">
    <tr class="content">
      <td>#</td>
      <td>Name <select id="filterText" class="form-control" name="filter" onchange="filterText()" >
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
      
      <td>Payment Status</td>
    </tr>
    <?php 

	  echo get_trasections("person.NameID",'$row["status"]',0,1); ?>
  </tbody>
</table>
</div>


  <?php
 mysql_close($conn);
include("footer.php");
?>
<script>
function filterText(){  
		var rex = new RegExp($('#filterText').val());
		if(rex =="/All Debts/"){clearFilter()
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
	
function clearFilter()
	{
		$('.filterText').val('');
		$('.content').show();
	}
  </script>

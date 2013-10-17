<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	
	<h2>Shopping Cart</h2>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Price</th>	
			<th>Tax</th>	
			<th>Shipping Fee</th>	
			<th>Quantity</th>	
							
					
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['PriceOfItems($)']?></td>
				<td><?=$rs['TotalTax($)']?></td>
				<td><?=$rs['TotalShippingFee($)']?></td>
				<td><?=$rs['TotalQuantity']?></td>
					<td>
					
				</td>
			</tr>
		<? endforeach ?>
		</tbody>
	</table>
</div>
<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
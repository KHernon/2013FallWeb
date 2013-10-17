<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	
	<h2>Items</h2>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Name</th>	
			<th>Original price</th>
			<th>Our Price</th>	
			<th>Model Number</th>
			<th>Description</th>	
			<th>Weight(lbs.)</th>		
			<th>Color</th>	
			<th>Rating</th>			
					
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Name']?></td>		
				<td><?=$rs['OriginalPrice']?></td>		
				<td><?=$rs['Price']?></td>		
				<td><?=$rs['ModelNo']?></td>	
				<td><?=$rs['Description']?></td>		
				<td><?=$rs['Weight']?></td>	
				<td><?=$rs['Color']?></td>		
				<td><?=$rs['AvgRating']?></td>						
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
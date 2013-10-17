<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	
	<h2>Credit Cards</h2>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Card Name</th>	
			<th>Name on Card</th>
			<th>Card Number</th>
			<th>Expiration Month</th>
			<th>Expiration Year</th>		
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['CardName']?></td>	
				<td><?=$rs['NameOnCard']?></td>
				<td><?=$rs['CardNumber']?></td>
				<td><?=$rs['ExpMonth']?></td>
				<td><?=$rs['ExpYear']?></td>			
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
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	
	<h2>Billing Address</h2>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Name</th>
			<th>Address 1</th>
			<th>Address 2</th>
			<th>City</th>
			<th>State</th>
			<th>Zip Code</th>
			<th>Country</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Name']?></td>
				<td><?=$rs['Address1']?></td>
				<td><?=$rs['Address2']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['PostalCode']?></td>
				<td><?=$rs['Country']?></td>
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
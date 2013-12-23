<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
	
	<h2>Items</h2>
	
	<a href="?action=new">Add Item</a>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Brand</th>
			<th>Name</th>
			<th>Original Proce</th>
			<th>Price</th>
			<th>ModelNo</th>
			<th>Description</th>			
			<th>Dimensions</th>
			<th>Weight</th>
			<th>Color</th>
			<th>Quantity</th>
			<th>Item Type</th>
			<th>Item Category</th>
			<th>Shipping Name</th>
			<th>Address1</th>
			<th>Address2</th>
			<th>City</th>
			<th>State</th>
			<th>PostalCode</th>
			<th>Country</th>				
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['FirstName']?></td>
				<td><?=$rs['LastName']?></td>	
				<td><?=$rs['Brand']?></td>	
				<td><?=$rs['Name']?></td>
				<td><?=$rs['OriginalPrice']?></td>	
				<td><?=$rs['Price']?></td>
				<td><?=$rs['ModelNo']?></td>
				<td><?=$rs['Description']?></td>	
				<td><?=$rs['Dimensions']?></td>	
				<td><?=$rs['Weight']?></td>
				<td><?=$rs['Color']?></td>	
				<td><?=$rs['Quantity']?></td>	
				<td><?=$rs['ItemType']?></td>
				<td><?=$rs['ItemCategory']?></td>	
				<td><?=$rs['ShippingName']?></td>	
				<td><?=$rs['Address1']?></td>
				<td><?=$rs['Address2']?></td>	
				<td><?=$rs['City']?></td>	
				<td><?=$rs['State']?></td>
				<td><?=$rs['PostalCode']?></td>	
				<td><?=$rs['Country']?></td>			
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a>
					<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
					<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>
				</td>
			</tr>
		<? endforeach ?>
		</tbody>
	</table>
</div>
<div class="modal fade" id="myModal">
</div>
  <? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
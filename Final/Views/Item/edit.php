<div class="container">
	<? $errors = isset($errors) ? $errors : array(); ?>
	<? if(isset($errors) && count($errors)): ?>
		<ul>
		<? foreach ($errors as $key => $value): ?>
			<li><label><?=$key?>:</label> <?=$value?></li>
		<? endforeach; ?>
		</ul>
	<? endif; ?>
	<form action="?action=save" method="post"  class="form-horizontal row">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		
		<div class="form-group <?=isset($errors['Brand']) ? 'has-error' : ''?>">
			<label for="Brand" class="col-sm-2 control-label">Brand</label>
			<div class="col-sm-10">
				<input type="text" name="Brand" id="Brand" placeholder="Brand" class="form-control " value="<?=$model['Brand']?>"  />
			</div>
			<span><?=@$errors['Brand']?></span>
		</div>
		<div class="form-group <?=isset($errors['Name']) ? 'has-error' : ''?>">
			<label for="Name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" name="Name" id="Name" placeholder="Name" class="form-control " value="<?=$model['Name']?>"  />
			</div>
			<span><?=@$errors['Name']?></span>
		</div>
		<div class="form-group <?=isset($errors['OriginalPrice']) ? 'has-error' : ''?>">
			<label for="OriginalPrice" class="col-sm-2 control-label">OriginalPrice</label>
			<div class="col-sm-10">
				<input type="text" name="OriginalPrice" id="OriginalPrice" placeholder="OriginalPrice" class="form-control "  value="<?=$model['OriginalPrice']?>" />
			</div>
			<span><?=@$errors['OriginalPrice']?></span>
		</div>	
		<div class="form-group <?=isset($errors['Price']) ? 'has-error' : ''?>">
			<label for="Price" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-10">
				<input type="text" name="Price" id="Price" class="form-control "  value="<?=$model['Price']?>" />
			</div>
			<span><?=@$errors['Price']?></span>
		</div>
		<div class="form-group <?=isset($errors['ModelNo']) ? 'has-error' : ''?>">
			<label for="ModelNo" class="col-sm-2 control-label">ModelNo</label>
			<div class="col-sm-10">
				<input type="text" name="ModelNo" id="ModelNo" placeholder="ModelNo" class="form-control " value="<?=$model['ModelNo']?>"  />
			</div>
			<span><?=@$errors['ModelNo']?></span>
		</div>
		<div class="form-group <?=isset($errors['Description']) ? 'has-error' : ''?>">
			<label for="Description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<input type="text" name="Description" id="Description" placeholder="Description" class="form-control " value="<?=$model['Description']?>"  />
			</div>
			<span><?=@$errors['Description']?></span>
		</div>
		<div class="form-group <?=isset($errors['LongDescription']) ? 'has-error' : ''?>">
			<label for="LongDescription" class="col-sm-2 control-label">LongDescription</label>
			<div class="col-sm-10">
				<input type="text" name="LongDescription" id="LongDescription" placeholder="Long Description" class="form-control "  value="<?=$model['LongDescription']?>" />
			</div>
			<span><?=@$errors['LongDescription']?></span>
		</div>	
		<div class="form-group <?=isset($errors['Dimensions']) ? 'has-error' : ''?>">
			<label for="Dimensions" class="col-sm-2 control-label">Dimensions</label>
			<div class="col-sm-10">
				<input type="text" name="Dimensions" id="Dimensions" class="form-control "  value="<?=$model['Dimensions']?>" />
			</div>
			<span><?=@$errors['Dimensions']?></span>
		</div>
		<div class="form-group <?=isset($errors['Weight']) ? 'has-error' : ''?>">
			<label for="Weight" class="col-sm-2 control-label">Weight</label>
			<div class="col-sm-10">
				<input type="text" name="Weight" id="Weight" placeholder="Weight" class="form-control " value="<?=$model['Weight']?>"  />
			</div>
			<span><?=@$errors['Weight']?></span>
		</div>
		<div class="form-group <?=isset($errors['Color']) ? 'has-error' : ''?>">
			<label for="Color" class="col-sm-2 control-label">Color</label>
			<div class="col-sm-10">
				<input type="text" name="Color" id="Color" placeholder="Color" class="form-control "  value="<?=$model['Color']?>" />
			</div>
			<span><?=@$errors['Color']?></span>
		</div>	
		<div class="form-group <?=isset($errors['Quantity']) ? 'has-error' : ''?>">
			<label for="Quantity" class="col-sm-2 control-label">Quantity</label>
			<div class="col-sm-10">
				<input type="text" name="Dimensions" id="Dimensions" class="form-control "  value="<?=$model['Quantity']?>" />
			</div>
			<span><?=@$errors['Quantity']?></span>
		</div>
		<div class="form-group <?=isset($errors['User_id']) ? 'has-error' : ''?>">
			<label for="User_id" class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-10">
				<select name="User_id" id="User_id" class="form-control ">
					<? foreach (User::GetSelectListFor() as $UserRs): ?>
						<option value="<?=$UserRs['id']?>"><?=$UserRs['FirstName']?> <?=$UserRs['LastName']?></option>
					<? endforeach; ?>
				</select>
				</select>
			</div>
			<span><?=@$errors['User_id']?></span>
		</div>
		<div class="form-group <?=isset($errors['ItemType_id']) ? 'has-error' : ''?>">
			<label for="ItemType_id" class="col-sm-2 control-label">Item Type</label>
			<div class="col-sm-10">
				<select name="ItemType_id" id="Item_Type_id" class="form-control ">
					<? foreach (ItemType::GetSelectListFor() as $TypeRs): ?>
						<option value="<?=$TypeRs['id']?>"><?=$TypeRs['Value']?></option>
					<? endforeach; ?>
				</select>
				</select>
			</div>
			<span><?=@$errors['ItemCategory_id']?></span>
		</div>
		<div class="form-group <?=isset($errors['ItemCategory_id']) ? 'has-error' : ''?>">
			<label for="ItemCategory_id" class="col-sm-2 control-label">Item Category</label>
			<div class="col-sm-10">
				<select name="ItemCategory_id" id="ItemCategory_id" class="form-control ">
					<? foreach (ItemCategory::GetSelectListFor() as $CategoryRs): ?>
						<option value="<?=$CategoryRs['id']?>"><?=$CategoryRs['Value']?></option>
					<? endforeach; ?>
				</select>
				</select>
			</div>
			<span><?=@$errors['ItemCategory_id']?></span>
		</div>
		<div class="form-group <?=isset($errors['ShippingAddress_id']) ? 'has-error' : ''?>">
			<label for="ShippingAddress_id" class="col-sm-2 control-label">Shipping Address</label>
			<div class="col-sm-10">
				<select name="ShippingAddress_id" id="ShippingAddress_id" class="form-control ">
					<? foreach (ShippingAddress::GetSelectListFor() as $ShippingRs): ?>
						<option value="<?=$ShippingRs['id']?>"><?=$ShippingRs['Address1']?> <?=$ShippingRs['Address2']?> <?=$ShippingRs['City']?> <?=$ShippingRs['State']?> <?=$ShippingRs['PostalCode']?></option>
					<? endforeach; ?>
				</select>
				</select>
			</div>
			<span><?=@$errors['ShippingAddress_id']?></span>
		</div>
		


		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save" />
			</div>
		</div>
	</form>
</div>
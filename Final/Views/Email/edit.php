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
		
		<div class="form-group <?=isset($errors['Value']) ? 'has-error' : ''?>">
			<label for="Value" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="Value" id="Value" placeholder="Email" class="form-control " value="<?=$model['Value']?>"  />
			</div>
			<span><?=@$errors['Value']?></span>
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

		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save" />
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(function(){
		$("#User_id").val(<?=$model['User_id']?>);
	})	
</script>






<div class="col-md-1">
	<form action="set.php?page=<?php echo $page?>" method="POST">
		<input type="hidden" name="id" value="<?php echo $list['id'];?>">
		<input type="hidden" name="mode" value="<?php echo $list['mode'];?>">
		<button type="submit" class="btn btn-default" aria-label="Left Align">
		<span title="Do this! if you push this, remove..." class="<?php echo $class_mode;?>" ria-hidden="true"></span>
		</button>
	</form>
</div>
<div class="col-md-1">
	<form action="set.php?" method="POST">
		<input type="hidden" name="id" value="<?php echo $list['id'];?>">
		<button type="submit" name="dell" class="btn btn-default">
		  <span title="Dell" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
		</button>
	</form>
</div>
<div class="col-md-1">
	<form action="?page=<?php echo $page?>" method="POST">
		<input type="hidden" name="id" value="<?php echo $list['id'];?>">
		<button type="submit" name="edit" class="btn btn-default">
		  <span title="Edit" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</button>	
	</form>
</div>
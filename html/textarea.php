<?php
if (isset($_POST['edit']))
{
	$state="edit";
	$get_one=$list -> get_one($_POST['id']);
	$content_edit=$get_one[0]['text'];
	$do="Update";

}
else {
	$state="add_task";
	$content_edit="";
	$do="ADD New task";
}
?>
	<form action="set.php?" method="POST">
		<textarea name="text" class="form-control"><?php echo $content_edit;?></textarea>
		<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
		<input type="submit" class="btn btn-info" name="<?php echo $state;?>" value="<?php echo $do;?>">
	</form><br>
<html>
	<head>
		<title>TO DO Lists...</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
		   form {
		    margin: 0; /* Убираем отступы */
		   }
  		</style>
	</head>
<body>
	<div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
				<div class="col-md-12"><h1>TO DO Lists .... </h1></div>
				<div class="col-md-12">
					<?php
						require_once './html/textarea.php';
					?>
				</div>
				<div class="class="col-md-12"">
				<?php
					foreach ($dolist as $list){
						if ($list["mode"]==1)
							{$class_mode='glyphicon glyphicon-ok';$role='alert alert-success';}
						else {$class_mode='glyphicon glyphicon-remove';$role='alert alert-danger';}
						?>
						
							<div class="<?php echo $role; ?> col-md-12" role="alert">
								<div class="col-md-1">
									<form action="set.php?page=<?php echo $page?>" method="POST">
										<input type="hidden" name="id" value="<?php echo $list['id'];?>">
										<input type="hidden" name="mode" value="<?php echo $list['mode'];?>">
										<button type="submit" class="btn btn-default" aria-label="Left Align">
										<span title="Do this! if you push this, remove..." class="<?php echo $class_mode;?>" ria-hidden="true"></span>
										</button>
									</form>
								</div>
								<div align="left" class="col-md-9">
									<?php echo  "<strong>-></strong> ".$list['text']." ";?>
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
									<form action="?" method="POST">
										<input type="hidden" name="id" value="<?php echo $list['id'];?>">
										<button type="submit" name="edit" class="btn btn-default">
										  <span title="Edit" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</button>	
									</form>
								</div>
							</div>
							<?php
					} 
				if ($pages > 1) {
					for($i = 1; $i <= $pages; $i++) { 
			?>
						<a href="/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
			<?php 		
					}
				}
			 ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
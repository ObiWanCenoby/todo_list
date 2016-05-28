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
		<div class="panel panel-default">
				<div align="center" class="panel-body">
				<?php require_once './authorization.php'?>
			</div>
		</div>
		<div class="row">
			<div align="center" class="col-md-12">
				<div class="col-md-12"><h1>TO DO Lists .... </h1></div>
				<div class="col-md-12">
					<?php
						if ($_SESSION['username']) {
								require_once './html/textarea.php';
								}
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
								<div align="left" class="col-md-9">
									<?php echo  "<strong>-></strong> ".$list['text']." ";?>
								</div>
								<?php if ($_SESSION['username']){
											include './html/edit_tasks.php';
												}
								?>
							</div>
							<?php
						} 
					require_once './html/pagenator.php';
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
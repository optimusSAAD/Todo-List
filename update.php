<!DOCTYPE html>
<?php include 'db.php';
$id=(int)$_GET['id'];
$sql = "select * from task where id='$id'";
$rows = $db -> query($sql);
$row = $rows->fetch_assoc();
if (isset($_POST['send'])) {
	$task = htmlspecialchars($_POST['task']);
	$sql2 = "update task set name='$task' where id = '$id' ";
$db-> query($sql2);
header('location: index.php');
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<title>Crud App</title>
	</head>
	<body>
		<div class="container">
			<center><h1>Update Todo List</h1></center>
			<div class="row" style="margin-top: 70px;">
				<div class="col-md-10 col-md-offset-1" >
					<table class="table">
						
						
						<hr><br>
						<form method="post" >
							<div class="form-group">
								<label>Task Name</label>
								<input type="text" required name="task" value="<?php echo $row['name']; ?>" class="from-controll">
							</div>
							<input type="submit" name="send" value="Add Task" class="btn btn-success">&nbsp;
							<a href="index.php" class="btn btn-warning">Back</a>
						</form>
						
						
						
						
					</div>
				</div>
				
			</body>
		</html>
<html
	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<br>
			<div class="panel panel-primary">
	    	<div class="panel-heading">Create User</div>
	        <div class="panel-body">	
			<div class="row">
				<div class="col-md-12">
					<form action="../back/create.php" method="post">
						<label>Name:</label>
						<input class="form-control" name="name">
						<label>Last Name:</label>
						<input class="form-control" name="last_name">
						<label>CC:</label>
						<input class="form-control" name="cc">
						<label>Phone:</label>
						<input class="form-control" name="phone">
						<label>Salary:</label>
						<input class="form-control" name="salary">
						<br>
						<input type="Submit" value="save" class="btn btn-primary">
					</form>
				</div>
				<div class="col-md-12">
					<a href="users.php" class="btn btn-default">List Users</a>
				</div>
			</div>
			</div>
			</div>
		</div>
		</div>
		
	</body>
</html>
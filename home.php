<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="container">

				<br><br><h1 class="text-center text-success">Welcome to Quiz World</h1><br><br>
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
					<h2 class="text-center card-header">Login Form</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>
					<div class="form-group">
							<label>Password</label>
							<input type="Password" name="Password" class="form-control">
					</div>	
					<button type="submit" style="color: blue;" class="butn butn-primary">Login </button>
					</form>
					</div>
				</div>	
			<div class="col-lg-6">
				<div class="card">
					<h2 class="text-center card-header">Signin Form</h2>

						<form action="registraition.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>
					<div class="form-group">
							<label>Password</label>
							<input type="Password" name="Password" class="form-control">
					</div>	
					<button type="submit" style="color: blue;" class="butn butn-primary">Sign in</button>
					</form>
				</div>	
			</div>	</div>
		</div>
		
</body>
</html>
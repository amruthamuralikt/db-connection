<!-- <!DOCTYPE html> -->
<html>
<head>
	 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/stylen.css">
     <script src="js/newscript.js"></script>
	<title>registration form</title>

</head>
<body>
			 <nav class="navbar navbar-expand-sm navbar-dark  bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><h3>WELCOME</h3></a>
			<div class="collpase navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					     <a class="nav-link" href="newreg.php" class="btn btn-out">Home</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="newreg.php" class="btn btn-out">Sign Up</a>

					    </li>
					    
					    <li class="nav-item">
					     <a class="nav-link" href="#" class="btn btn-out">Login</a>
					    </li>
					   </ul>
		</div>
</div>
</nav>
                
			<div class="container dcol">
				<div class="login-box">
				<div class="row">
					<div class="col-mid-3 login-p">
						<form action="newconnect.php" method="post">
						<h1>REGISTER</h1>
						<hr class="mb-3">
						<div class="form-group">
							<label for="name">Name</label>
							<input class="form-control" type="text" name="uname"  required>
						</div>
						<div class="form-group">
							<label for="number">Contact Number</label>
							<input class="form-control" type="text" name="number" required>
						</div>
						<div class="form-group">
							<label for="number">Email</label>
							<input class="form-control" type="text" name="email" required>
						</div>
							<hr class="mb-3">
						
						<input class="btn btn-primary "style="width:80px;" type="submit" name="register" value="OK"><br>

						
							</form>
				    </div>
			    </div>
			</div>
		
	        </div>
			
	</div>

</body>
</html>|
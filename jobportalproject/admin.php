<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width= device-width,initial-scale=1">
<link rel="stylesheet" text="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" text="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" text="text/css" href="css/style.css">
</head>
<body>
<div class="body">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
<div class="container">
<div class="nav-header logo">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>	
</button>	
<a href="index.php" class="navbar-brand pull-left">Job Portal</a>
</div><!--nav header-->
<div class="collapse navbar-collapse menu">
<ul class="nav navbar-nav pull-right">
<li><a href="index.php">Home</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="alogin.php">Admin</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container">
<div class="col-lg-4"></div>	
<div class="col-lg-4">
<div class="jumborton form">
<form action=" " method="post">
<div class="form-group">
<label>EmailId</label>
<input type="text" name="aname" class="form-control" placeholder="Enter your mail id" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="cpwd" class="form-control" placeholder="Enter your password" required>
</div>
<input type="submit" name="submit" value="Register" class="btn btn-primary form-control">
</form>
<a href="alogin.php" style="text-decoration:none;color:#fff;font-size:20px;">Already have an acoount</a>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
	include('config.php');
	if(isset($_POST['submit']))
	{
		$xaname=$_POST['aname'];
		$xpass=md5($_POST['pass']);
		$ins="insert into admin(admin,pass) values('$xaname','$xpass')";
		$res=mysql_query($ins) or die(mysql_error());
		header("location:Admin_login.php");
	}
?>
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
<div class="bing">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
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
<li><a href="alogin.php">Admin</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>	
<div class="container">
<div class="col-md-4"></div>	
<div class="col-md-4">
<div class="jumborton form2">
<form action=" " method="post">
<div class="form-group">
<label>EmailId</label>
<input type="text" name="aname" class="form-control" placeholder="Enter your mail id" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
</div>
<div class="checkbox">
<label><input  type="checkbox" name="val">Remeber me</label>
</div>
<input type="submit" name="login" value="Login" class="btn btn-primary form-control">
</form>
</div>
</div>
</div>
</div>
<div class="footer text-center bill" style="padding:3px 0;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
<?php
	include('config.php');
	session_start();
	if(isset($_POST['login']))
	{
		$xaname=$_POST['aname'];
		$xpass=md5($_POST['pass']);
		$sql="select * from job where aname='$xaname'and pass='$xpass'	";
		$res=mysql_query($sql);
		$row=mysql_num_rows($res);
		if($row)
		{
			$_SESSION['ad']=mysql_result($res,0);
			header("location:post.php");
		}
		else
		{
			echo "Invalid username or password";
		}
	}
	mysql_close($con);
?>
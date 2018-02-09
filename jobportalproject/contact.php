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
<div class="jumborton">
<div class="back2">
<div class="container">
<div class="col-md-12">
<form action="" method="post" class="con">
<div class="form-group input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
<input type="text" name="fname" class="form-control" placeholder="Enter you Full Name">
</div>
<div class="form-group input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-Envelope"></span></span>
<input type="email" name="mail" class="form-control" placeholder="Enter you Mail id">
</div>
<div class="form-group input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
<input type="tel" name="phone" class="form-control" placeholder="Enter you Phone no">
</div>
<div class="form-group input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
<textarea class="form-control" id="name" name="com" placeholder="Enter Your Comments or queries" rows="8" col="22"></textarea>
</div>
<button name="comment" class="btn btn-lg btn-success">Comment</button>
</div>
</div>
</form>
</div>
<div class="ab">
<div class="container">
<h1 class="text-center">About Us</h1>
<h3>Vision</h3>
<p>Our vision is to bring credible and genuine assessment to various aspects of education, 
training and employment.Aspiring Minds strives to help institutions and companies from choosing the 'right' 
individual rather than the 'best' individual.</p>
<h3>Mission</h3>
<p>Our envisions a scalable, equitable, merit driven labor market providing credibility and access to talent and 
opportunity.Our mission is to establish one scientific and credible approach to measuring talent and matching it to opportunity.</p>
<h3>Management</h3>
<p>Founded by Varun and Himanshu, the Aspiring Minds team is 160 people strong,
 boasting of alumni of premier institutions such IIMs, 
 IITs and NITs with dozens of years of experience at various large corporate and MNCs. 
 With offices in Delhi, Bangalore and Mumbai and full-time presence across all major cities, 
 Our team is committed to servicing its clients and partners at the highest possible standards.</p>
</div>
</div>

</div>
<div class="clear"></div>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
<?php
	include('config.php');
	if(isset($_POST['comment']))
	{
		$xfname=$_POST['fname'];
		$xmail=$_POST['mail'];
		$xphone=$_POST['phone'];
		$xcom=$_POST['com'];
		$ins="insert into  contact(fname,mail,phone,com) values('$xfname','$xmail','$xphone','$xcom')";
		$res=mysql_query($ins) or die(mysql_error());
	}
?>

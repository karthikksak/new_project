<?php
error_reporting(0);
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width= device-width,initial-scale=1">
<link rel="stylesheet" text="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" text="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" text="text/css" href="css/style.css">
</head>
<body  style="background:#E79E85;">
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
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>	
<a href="index.php" class="navbar-brand pull-left">Job Portal</a>
</div><!--nav header-->
<div class="collapse navbar-collapse menu">
<ul class="nav navbar-nav pull-right" >
<li><a href="Post.php">Post</a></li>
<li><a href="jobs.php">Applied Jobs</a></li>
<li><a href="posted.php">Job Posted</a></li>
<li><a href="score.php">Scores of user</a></li>
<li><a href="gen.php">Questions</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="form text-center">
<form action="" method="post">
<div class="form-group">
<input size="16" type="date" name="draft"> 
</div>
<input  type='submit' name='schedule' value='Schedule' class='btn btn-primary' style='border-radius:0;'>
</form>
</div>
<div class="container">
<?php
include('config.php');
session_start();
if(isset($_POST['schedule']))
{
	
	$id=$_GET['id'];
	$xshed=$_POST['draft'];
	$sql="update apply set schedule ='$xshed',yes='yes' where id='$id'";
	$res=mysql_query($sql) or die(mysql_error());
	header("location:jobs.php");
}
?>
</div>
</body>
</html>

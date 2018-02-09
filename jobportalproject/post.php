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
</button>	
<a href="index.php" class="navbar-brand pull-left">Job Portal</a>
</div><!--nav header-->
<div class="collapse navbar-collapse menu">
<ul class="nav navbar-nav pull-right" >
<li class="active"><a href="Post.php">Post</a></li>
<li><a href="jobs.php">Applied Jobs</a></li>
<li><a href="posted.php">Job Posted</a></li>
<li><a href="score.php">Scores of user</a></li>
<li ><a href="gen.php">Questions</a></li>
<li ><a href="documet.php">View_Document</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container form">
<h1 class="text-center">Posting the Jobs</h1>
<div class="col-md-12">
<form action="" method="post">
<div class="form-group">
<label>Job Designation</label><br/>
<input type="text" name="desg" placeholder="Enter job designation" class="form-control">
</div>
<div class="form-group">
<label>Job Description</label><br/>
<textarea class="form-control" name="desc1" id="name" rows="10" cols="22"></textarea>
</div>
<div class="form-group">
<label>Key Skill</label><br/>
<textarea class="form-control" name="skill" id="ski" rows="10" cols="22"></textarea>
</div>
<button class="btn btn-lg btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
<?php
	include('config.php');
	session_start();
	if(isset($_POST['submit']))
	{
	$xdesg=$_POST['desg'];
	$xdesc=$_POST['desc1'];
	$xskill=$_POST['skill'];
	$date=date('Y-m-d H:i:s');
	$sql="insert into posts(desg,desc1,skill,datetime) values('$xdesg','$xdesc','$xskill','$date')";
	$res=mysql_query($sql) or die(mysql_error());
	}
	mysql_close($con);
?>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
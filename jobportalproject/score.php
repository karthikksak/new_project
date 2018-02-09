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
<li class="active"><a href="score.php">Scores of user</a></li>
<li><a href="gen.php">Questions</a></li>
<li ><a href="documet.php">View_Document</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" style="margin-top:120px;">
<h1 class="text-center">Aptitude score of all Users</h1>
<table class="table table-responsive">
<tr class="info text-center" style="color:#E41655;">
<td>
User Id
</td>
<td>
Score
</td>
<td>
Pass or Fail
</td>
</tr>
<?php
include('config.php');
	$sql="select u.email,p.score,p.pass from user as u inner join pass as p where u.id=p.uid";
	$res=mysql_query($sql) or die (mysql_error());
	while($row=mysql_fetch_array($res))
	{
		echo "<tr class='active text-center'>";
		echo "<td>";
		echo $row['email'];
		echo "</td>";
		echo "<td>";
		echo $row['score'];
		echo "</td>";
		echo "<td>";
		echo $row['pass'];
		echo "</td>";
		echo "</tr>";
		
	}
	
?>
</table>
</div>
<div class="container" style="margin-top:120px;">
<h1 class="text-center">Technical score of all Users</h1>
<table class="table table-responsive">
<tr class="info text-center" style="color:#E41655;">
<td>
User Id
</td>
<td>
Score
</td>
<td>
Pass or Fail
</td>
</tr>
<?php
include('config.php');
	$sql="select u.email,p.score,p.pass from user as u inner join tpass as p where u.id=p.uid";
	$res=mysql_query($sql) or die (mysql_error());
	while($row=mysql_fetch_array($res))
	{
		echo "<tr class='active text-center'>";
		echo "<td>";
		echo $row['email'];
		echo "</td>";
		echo "<td>";
		echo $row['score'];
		echo "</td>";
		echo "<td>";
		echo $row['pass'];
		echo "</td>";
		echo "</tr>";
		
	}
	
?>
</table>
</div>
<div class="footer text-center bill" style="margin-top:199px;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
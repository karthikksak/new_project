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
<ul class="nav navbar-nav pull-right" >
<li><a href="blog.php">Blog</a></li>
<li><a href="profilepage.php">Profile</a></li>
<li><a href="ctest1.php">test</a></li>
<li class="active bal"><a href="notification.php">Notify</a></li>
<li ><a href="userjobs.php">Jobs</a></li>
<li ><a href="usermark.php">Score</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul> 
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class=" container" style="margin-top:100px;">
<h3>
Notification :
</h3><br/>
<?php
include('config.php');
session_start();

if(isset($_SESSION['id']))
{

	$uid=$_SESSION['id'];
	$sql="select * from apply where sid='$uid'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{?>
	<table class="table table-bordered text-center" >
		<tr class="info">
		<td>
		Test Schedule on
		</td>
		<td>
		Click Here
		</td>
		</tr>
		<tr class="active">
		<td>
		<?php echo $row['schedule'];?>
		</td>
		<td>
	<?php
	if($row['schedule']==date('Y-m-d'))
	{?>
		<a  href="ctest.php" class=" btn active btn-primary" >Take a Test</a>
	<?php
	}
	else
	{?>
		<button type="button"   class=" btn disabled btn-primary" >Take a Test</button>
	<?php
	}
	?>
		
		</td>
		</tr>
		</table>
<?php
	}
	$sql1="select count(*) from apply where sid='$uid'";
		$res1=mysql_query($sql1);
		$row1=mysql_fetch_array($res1);
		$GLOBALS['z']=$row1[0];
		
}
?>
</div>  
<div class="text-center bill" style="margin-top:77px;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
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
<li class="active"><a href="blog.php">Blog</a></li>
<li><a href="profilepage.php">Profile</a></li>
<li><a href="notification.php">Notify</a></li>
<li ><a href="userjobs.php">Jobs</a></li>
<li ><a href="usermark.php">Score</a></li>	
<li><a href="alogout.php">Log Out</a></li>
</ul> 
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<br>
<br>
<br>
<div class="container text-center" style="color:#000;font-family:Times New Roman;font-style:Oblique;font-size:40px;">
<h3>Jobs For You</h3>
</div>
<br>
<br>
<br>	
<br>
<div class="row" style="margin:0 auto;">	
<div class="col-md-12">
<?php
	include('config.php');
	$sql="select * from posts";
	$res=mysql_query($sql) or die(mysql_error());
	$pos=mysql_fetch_array($res);
	while($pos=mysql_fetch_array($res))
	{	
		echo'<div class="col-md-6" style="font-style:oblique;font-size:20px;font-family:Arial;">';
		echo"<h3 style=color:#FD5959;>". $pos[1]."</h3><br/><br/><br/>";
		echo substr($pos[2],0,100)."<br/><br/><br/>";
		echo substr($pos['skill'],0,30)."<br/<br/><br/>";
		?>
		<form action='view.php?id=<?php echo $pos['id'];?>' method='post'><input type='submit' name='apply' values='APPLY'  class='btn btn-primary'></form><br/><br/>
		<?php 
		echo'</div>';	
	}
	mysql_close($con);
?>
</div>
</div>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
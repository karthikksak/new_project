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
<li ><a href="profilepage.php">Profile</a></li>
<li ><a href="notification.php">notify</a></li>
<li class="active"><a href="userjobs.php">Jobs</a></li>
<li ><a href="usermark.php">Score</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul> 
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="clear"></div>
<div class="container" style="margin-top:100px;">	
<h3 class="text-center">Jobs applied by the user</h3>
<table class="table table-responsive text-center">	
<tr class="active" style="color:#0E91A1">
<td>Designation</td>
<td>Apply</td>
<td>Date</td>
</tr>
		<?php
		include('config.php');
		session_start();
		if(isset($_SESSION['id']))
		{
			$uid=$_SESSION['id'];
			$que="select * from apply where id='$uid'";
			$result=mysql_query($que);
			while($row=mysql_fetch_array($result))
			{
				echo "<tr class='active'>";
				echo "<td>".$row['desg']."</td>";
				echo "<td>".$row['apply']."</td>";
				echo "<td>".$row['date']."</td>";
				echo "</tr>";
			}
		}
		?>
</table>
</div>
<div class="footer text-center bill" style="margin-top:388px;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
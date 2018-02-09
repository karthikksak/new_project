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
<li class="active"><a href="test.php">Test</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" style="padding-top:400px;">
<?php
	include('config.php');
	if(isset($_SESSION['id']))
	{
		$sql="(select * from gen where tests='test1' ORDER BY RAND() LIMIT 3)UNION ALL(select * from gen where tests='test3' ORDER BY RAND() LIMIT 3)UNION ALL(select * from gen where tests='test3' ORDER BY RAND() LIMIT 3)";
		$res=mysql_query($sql) or die(mysql_error());
		while($row=mysql_fetch_array($res))
		{
			echo $row['que']."<br/>";
			echo $row['option1']."&nbsp&nbsp&nbsp&nbsp".$row['option2']."&nbsp&nbsp&nbsp&nbsp".$row['option3']."&nbsp&nbsp&nbsp&nbsp".$row['option4']."<br/>";
		}
	}
?>
</div>
</body>
</html>
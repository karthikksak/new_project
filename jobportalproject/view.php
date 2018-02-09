<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width= device-width,initial-scale=1">
<link rel="stylesheet" text="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" text="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" text="text/css" href="css/style.css">
<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

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
<li class="active"><a href="view.php">View</a></li>
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
<br>
<h1 class="text-center">Apply To This Job</h1>
<br>
<br><br>
<br>
<?php
	$msg="";
	session_start(); 
	include('config.php');
	echo $msg;
	if(isset($_GET["id"]))
	{
	$id=$_GET['id'];
	$sql="select * from posts where id='$id'";
	$res=mysql_query($sql) or die(mysql_error());
	$pos=mysql_fetch_array($res);
	if($pos)
	{
		echo "<div class='container' style='font-family:Open sans;font-size:20px;font-style:oblique;'>";
		echo $pos[1]."<br/><br/><br/><br/><br/>";
		echo $pos[2]."<br/><br/><br/><br/>";
		echo $pos[3]."<br/><br/><br/><br/>";
		echo "<form action='#' class='text-center' method='post'><button id='myBtn' name='reg' class='btn btn-lg btn-primary' style='border-radius:0;'>APPLY</button></form>";
		echo "</div>";
		echo $msg;
		
	}

}
?>
<?php
	if(isset($_POST['reg']))
	{
		if(isset($_SESSION['id']))
		{
			$id1=$_SESSION['id'];
			$ins="insert into apply(degid,sid,desg,apply,date)values('".$_GET['id']."','".$id1."','".$pos['desg']."','applied',curdate()) ";
			$res=mysql_query($ins) or die(mysql_error());
			if($res)
			{
				$msg="Applied Successfully";
				echo $msg;
				header("location:profilepage.php");
			}
		}
	}
?>
</body>
</html>	

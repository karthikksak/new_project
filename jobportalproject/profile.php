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
<li class="active"><a href="profilepage.php">Profile</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul> 
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<?php
{
include('config.php');
session_start();
	if(isset($_POST['update']))
	{
		$id=$_SESSION['id'];
		$array=array("doc","docx","gif","jpg");
		$temp=explode(".",$_FILES['image']['name']);
		$end=end($temp);
		if(in_array($end,$array))
		{
			$pic=rand(10000,99999)."-".$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],"uimage/".$pic);
		}
		$sql="update user set email='".$_POST['email']."',addr='".$_POST['addr']."',mobile='".$_POST['mobile']."',pic='$pic' where id='$id'";
		$res=mysql_query($sql) or die(mysql_error());
		header("LOCATION:profile.php");
	}
}
?>
<div class="container" style="margin-top:100px;">
<h2 class="text-center">Profile page</h2><br/>
<div class=" form-horizontal">
<div class="col-md-12">
<div class="col-md-7">
<?php

if($_SESSION['id'])
{
	$id=$_SESSION['id'];
	$ins="select * from user where id='$id'";
	$res=mysql_query($ins) or die(mysql_error());
	if($row=mysql_fetch_array($res))
	{?>
		<form action=" " method="post" enctype="multipart/form-data" >
		<div class="form-group">
		<label class="control-label col-md-2">FirstName</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="fname" value="<?php echo $row['fname'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">MiddleName</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="mname" value="<?php echo $row['mname'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">LastName</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="lname" value="<?php echo $row['lname'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Email Id</label>
		<div class="col-md-7">
		<input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>">
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Date of Birth</label>
		<div class="col-md-7">
		<input class="form-control" type="date" name="dob" value="<?php echo $row['dob'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Address</label>
		<div class="col-md-7">
		<textarea name="addr" class="form-control" id="name" rows="5" cols="22"><?php echo $row['addr'];?></textarea>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Educational Institute</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="inst" value="<?php echo $row['inst'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Educational Qualification</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="coname" value="<?php echo $row['coname'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Cgpa</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="cgpa" value="<?php echo $row['cgpa'];?>" disabled>
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Mobile no</label>
		<div class="col-md-7">
		<input class="form-control" type="text" name="mobile" value="<?php echo $row['mobile'];?>">
		</div>
		</div>
		<div class="form-group">
		<label class="control-label col-md-2">Upload your Photo</label>
		<div class="col-md-7">
		<input type="file" name="image">
		<?php //echo "<h5>".$row['$pic']."</h5>";?>
		</div>
		</div>
		<div class="text-center">
		<input type="submit" name="update" value="Update" class="btn btn-lg btn-primary"> 
		</div>
		</form>
<?php
	}
}
?>
</div>
</div>
</div>
</div>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>

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
<li ><a href="notification.php">notify</a></li>
<li ><a href="userjobs.php">Jobs</a></li>
<li ><a href="usermark.php">Score</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul> 
</li>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" id="p"  style="width:50%;padding-left:100px; margin-top:70px;">
			<h2 style="color:#19b9e7; margin-left:-15px" >Profile Info</h2><br><br>
				<div class="row">
		<?php
		include("config.php");
		session_start();
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$sql="select * from user where id='$id'";
			$res=mysql_query($sql);
			while($row=mysql_fetch_array($res))
			{ ?>
			
					<div class="col-md-5">
						<?php if(!empty($row['pic']))
							{ $pic= $row['pic'];
						?>
							<img src="uimage/<?php echo $pic;?>" class="img-responsive" width="60%">
							<form action="profile.php" method="post" enctype='multipart/form-data'> 
		
									<button type="submit" class="btn btn-primary" name="yes" style="font-size:16px; padding:5px 10px;margin-top:100px;"> Edit Your Profile</button>
									
							</form>
						<?php }
						else
						{ 
							if($row['gender']=="female") {?>
							<img src="uimage/user1.png" class="img-responsive" width="50%"><br>
							<form action="profile.php" method="post" enctype='multipart/form-data'> 
		
									<button type="submit" class="btn btn-primary" name="yes" style="font-size:16px; padding:5px 10px;"> Edit Your Profile</button>
									
							</form>
							<?php 
						}
							elseif($row['gender']=="male")
							{ ?>
								<img src="uimage/user.png" class="img-responsive">
								<form action="profile.php" method="post" enctype='multipart/form-data'> 
		
								<button type="submit" class="btn btn-primary" name="yes" style="font-size:16px; padding:5px 10px;"> Edit Your Profile</button>
									
							</form>
								<?php }
						} 
			     ?>
					</div>
					<div class="col-md-7" class="profile">
						<label >First Name:</label>
						<span><?php echo $row['fname']; ?></span><br><br>
						<label>Middle Name:</label>
						<span><?php echo $row['mname']; ?></span><br><br>
						<label>Last Name:</label>
						<span><?php echo $row['lname']; ?></span><br><br>
						<label>Email-id:</label>
						<span ><?php echo $row['email']; ?></span><br><br>
						<label>Gender</label>
						<span><?php echo $row['gender']; ?></span><br><br>
						<label>Institute:</label>
						<span><?php echo $row['inst']; ?></span><br><br>
						<label>Mobile No:</label>
						<span><?php echo $row['mobile']; ?></span><br><br>
						<label>Address:</label>
						<span><?php echo $row['addr']; ?></span><br><br>
					</div>
				</div> 
</div>	
</div>
<?php } }
		?>
<div class="footer text-center bill" style="margin-top:109px;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
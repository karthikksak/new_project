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
<div class="back">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
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
<ul class="nav navbar-nav pull-right">
<li><a href="index.php">Home</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="alogin.php">Admin</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container">
<div class=" form-horizontal">
<div class="col-md-7">
<div class="form1 row">
<form action="" method="post"  enctype="multipart/form-data" >
<div class="form-group">
<label class="control-label col-md-2">FirstName</label>
<div class="col-md-7">
<input type="text" name="fname" class="form-control" placeholder="Enter your firstname">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">MiddleName</label>
<div class="col-md-7">
<input type="text" name="mname" class="form-control" placeholder="Enter your middlename">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">LastName</label>
<div class="col-md-7">
<input type="text" name="lname" class="form-control" placeholder="Enter your lastname">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">EmailId</label>
<div class="col-md-7">
<input type="email" name="email" id="email" onblur="check()" class="form-control" class="form-control" placeholder="Enter Your mailid">
</div><div id="error" style="color:#fff;"></div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Password</label>
<div class="col-md-7">
<input type="password" name="pwd" id="pwd" onblur="pass()" class="form-control" placeholder="Enter your password">
</div><div id="error1" style="color:#fff;"></div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Confirm password</label>
<div class="col-md-7">
<input type="password" name="cpwd" id="cpwd" onblur="pass1()"class="form-control" placeholder="Enter your confirm password" >
</div><div id="error2" style="color:#fff;"></div>
</div>
<br/>
<div class="form-group">	
<label class="control-label col-md-2">Date of Birth</label>
<div class="col-md-7">
<input type="date" class="form-control" name="dob">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Address</label>
<div class="col-md-7">
<textarea name="addr" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Address"></textarea>
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Education Instiute</label>
<div class="col-md-7">
<input type="text" name="inst" class="form-control" placeholder="Enter your Instituite">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Education Qualificaton</label>
<div class="col-md-7">
<input type="text" name="coname" class="form-control" placeholder="Enter Your Qualificaton">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Enter your CGPA</label>
<div class="col-md-7">
<input type="text" name="cgpa" class="form-control" placeholder="Enter yor cgpa">
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Mobile No</label>
<div class="col-md-7">
<input type="tel" name="mobile" id="mobile" onblur="mob()" class="form-control" placeholder="Enter your mobile no">
</div><div id="error3" style="color:#fff;"></div>
</div>
<br/>
<div class="form-group" style="font-size:18px;color:#000">
<label class="control-label col-md-2">Gender</label>
<div class="col-md-10" style="padding-left:20px;margin-top:10px;">
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="Others">Others
</div>
</div>
<br/>
<div class="checkbox" style="font-size:18px;color:#000;">
<label class="control-label col-md-2">Language</label>
<div class="col-md-10"  >
<input type="checkbox" name="lang[]" value="tamil">Tamil&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="lang[]" value="english">English&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="checkbox" name="lang[]" value="hindhi">Hindhi&nbsp&nbsp&nbsp&nbsp&nbsp
</div>
</div>
<br/>
<br/>
<br/>
<div class="form-group">
<label class="control-label col-md-2" for="sel1">Country</label>
<div class="col-md-7">
<select name="country" id="se1" class="form-control">
<option value=" ">I Am</option>
<option value="India">India</option>
<option value="America">America</option>
<option value="London">London</option>
</select>
</div>
</div>
<br/>
<div class="form-group">
<label class="control-label col-md-2">Upload Your Cv</label>
<div class="col-md-7">
<input type="file" name="cv" class="form-control-file">
</div>
</div>
<br/>
<div class="form-group" style="padding-left:70px;">
<input type="submit" name="register" value="Register" class="btn btn-lg btn-primary">
</div>
</form>
</div>
</div>
</div>
</div>
<a href="login.php" style="font-size:20px;color:white;padding-left:90px;">Already have an acoount</a>
</div>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
<?php
include('config.php');
 if(isset($_POST['register']))	
 {
		$xfname=$_POST['fname'];
		$xmname=$_POST['mname'];
		$xlname=$_POST['lname'];
		$xemail=$_POST['email'];
		$xpwd=md5($_POST['pwd']); 
		$xdob=$_POST['dob'];
		$xaddr=$_POST['addr'];
		$xinst=$_POST['inst'];
		$xconame=$_POST['coname'];
		$xcgpa=$_POST['cgpa'];
		$xmobile=$_POST['mobile'];
		$xgeder=$_POST['gender'];
		$xlang=$_POST['lang'];
		$xlang=implode(",",$xlang);
		$xcountry=$_POST['country'];
		$xcv=$_POST['cv'];
		
		$sql="select * from user where email='$xemail'";
		$res=mysql_query($sql);
		if($row=mysql_num_rows($res))
		{
			echo "user already exist";
		}
		else
		{
			$array=array("doc","docx","xls","csv");
			$temp=explode(".",$_FILES['cv']['name']);
			$end=end($temp);
			if(in_array($end,$array))
			{
				$cv=rand(10000,99999)."-".$_FILES['cv']['name'];
				move_uploaded_file($_FILES['cv']['tmp_name'],"doc/".$cv);
				$sql="insert into user(fname,mname,lname,email,pwd,dob,addr,inst,coname,cgpa,mobile,gender,lang,country,cv) 
				values('$xfname','$xmname','$xlname','$xemail','$xpwd','$xdob','$xaddr','$xinst','$xconame','$xcgpa','$xmobile','$xgeder','$xlang','$xcountry','$cv')";
				$res=mysql_query($sql) or die(mysql_error());
				header("location:login.php");
			}
		}
}
	mysql_close($con);
 ?>
 <script>
		function check()
		{
			ma=document.getElementById("email").value;
			
			
				if(ma.indexOf("@")> -1)
				{
						document.getElementById("error").innerHTML=" ";
				}
				else
				{
						document.getElementById("error").innerHTML=" Email id must contain '@' symbol";
				}
			
		}
		function pass()
		{
			password=document.getElementById("pwd").value;
			if(password.length == 8)
				{
						document.getElementById("error1").innerHTML=" ";
				}
				else
				{
						document.getElementById("error1").innerHTML=" Password must contains 8 characters";
				}
		}

		function pass1()
		{
			cpassword=document.getElementById("cpwd").value;
			if(cpassword == password)
				{
						document.getElementById("error2").innerHTML=" ";
				}
				else
				{
						document.getElementById("error2").innerHTML=" Password does not match";
				}
		}
		function mob()
		{
			mobile=document.getElementById("mobile").value;
			if(mobile.length == 10)
				{
						document.getElementById("error3").innerHTML=" ";
				}
				else
				{
						document.getElementById("error3").innerHTML=" mobile number must contains 10 number";
				}
		}

		</script>
 
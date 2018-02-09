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
<li><a href="Post.php">Post</a></li>
<li><a href="jobs.php">Applied Jobs</a></li>
<li><a href="posted.php">Job Posted</a></li>
<li><a href="score.php">Scores of user</a></li>
<li class="active"><a href="gen.php">Questions</a></li>
<li ><a href="documet.php">View_Document</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" style="margin-top:100px;">
<div class="col-md-7">
<div class="form-horizontal">
<form action="" method="post">
<div class="form-group">
<label style="font-size:20px;color:#000;font-style:italic;" class="col-md-2">Tests</label>
<div class="col-md-7">
<select name="tests" class="form-control">
<option value=""></option>
<option value="Aptitude">Aptitude</option>
<option value="C&C++">C & C++</option>
<option value="Java">Java</option>
<option value="Php&MySql">Php & MySql</option>
<option value="DotNet">DotNet</option>
<option value="Android">Android</option>
</select>
</div>
</div><br/>
<div class="form-group">
<label class="control-label col-md-2" style="font-size:20px;color:#000;font-style:italic;">Question</label>
<div class="col-md-7">
<textarea name="que" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Question"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2" style="font-size:20px;color:#000;font-style:italic;">Option1</label>
<div class="col-md-7">
<textarea name="option1" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Option"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2" style="font-size:20px;color:#000;font-style:italic;">Option2</label>
<div class="col-md-7">
<textarea name="option2" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Option"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2" style="font-size:20px;color:#000;font-style:italic;">Option3</label>
<div class="col-md-7">
<textarea name="option3" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Option"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2" style="font-size:20px;color:#000;font-style:italic;">Option4</label>
<div class="col-md-7">
<textarea name="option4" class="form-control" id="name" rows="5" cols="22" placeholder="Enter Option"></textarea>
</div>
</div>
<div class="form-group">
<label style="font-size:20px;color:#000;font-style:italic;" class="col-md-2">Answers</label>
<div class="col-md-7">
<select name="answers" class="form-control">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
</div>
<div class="form-group text-center">
<input type="submit" value="submit" name="add1" class="btn btn-lg btn-primary" style="border-radius:0;">
</div>
</form>
</div>
</div>
</div>
<?php
	include('config.php');
	session_start();
	if(isset($_POST['add1']))
	{
		$xtests=$_POST['tests'];
		$xque=$_POST['que'];
		$xoption1=$_POST['option1'];
		$xoption2=$_POST['option2'];
		$xoption3=$_POST['option3'];
		$xoption4=$_POST['option4'];
		$xanswers=$_POST['answers'];
		$ins="insert into gen(tests,que,option1,option2,option3,option4,answers) 
		values('$xtests','$xque','$xoption1','$xoption2','$xoption3','$xoption4','$xanswers')";
		$res=mysql_query($ins) or die(mysql_error());
	}
?>
<div class="footer text-center bill" style="margin-top:50px;">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
</html>
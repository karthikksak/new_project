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
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" style="margin-top:150px;">
<h2 style="margin-bottom:80px;">Take a Technical Test</h2>
<h3>Choose your regarding language</h3>
<form action="" method="post">
<div class="dropdown pull-left">

 <button class="btn btn-primary  dropdown-toggle"   type="button" id="menu1" data-toggle="dropdown" style="border-radius:0px">Technical
    <span class="caret"></span></button>
	
    <ul  class="dropdown-menu" name="test" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1"  value="c & C++" href="test1.php"><input type="hidden" name="test" value="c & c++">C & C++</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1"  value="java" href="test2.php"><input type="hidden" name="test" value="Java">Java</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1"  value="php" href="test3.php"><input type="hidden" name="test" value="Php & MySql">Php & MySql</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1"  value="dotnet" href="test4.php"><input type="hidden" name="test" value="DotNet">DotNet</a></li>
	  <li role="presentation"><a role="menuitem" tabindex="-1"  value="android" href="test5.php"><input type="hidden" name="test" value="Android">Android</a></li>
    </ul>

<select	name="pick" >
<option value="C & C++"> C & C++ </option>
</select>
</form>
</div>
</body>
</html>

 <?php	
	include('config.php');
	session_start();
	if(isset($_POST['test']))
	{
		$xtest=$_POST['test'];
		$sql="insert into tpass (test) values('$xtest')";
		$res=mysql_query($sql);
	}
	?>
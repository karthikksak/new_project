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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="slider/s1.jpg" alt="young" width="100%" >
      </div>

      <div class="item">
        <img src="slider/s2.jpg" alt="write" width="100%" >
      </div>
    
      <div class="item">
        <img src="slider/s3.jpg" alt="keyboard" width="100%" >
      </div>

      <div class="item">
        <img src="slider/s4.jpg" alt="type" width="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<div class="jumbotron">
<div class="container text-center">
<h1>Its	 time to get a Job on your own</h1>
<p>A good work ethic is not so much a concern for hard work but rather one for responsibility. There have been a great many men and women who have in fact used work or hustle or selfish ambition as an escape from real responsibility, an escape from purpose. In matters such as these, the hard worker is just as dysfunctional as the sloth.</p>
<div class="btn-group">
	<a href="register.php" class="btn btn-lg btn-primary">Register</a>
	<a href="login.php" class="btn btn-lg btn-primary">Login</a>
	<a href="alogin.php" class="btn btn-lg btn-primary">Admin</a>
</div>
</div>
<div class="container text-center">
<h2>Recent Job Posts</h2>
<?php
	include('config.php');
	$date=DATE('Y-m-d');
	$sql="select * from posts order by desc1 desc limit 4";
	$res=mysql_query($sql) or die(mysql_error());
	$pos=mysql_fetch_array($res);
	while($pos=mysql_fetch_array($res))
	{	
		
		echo'<div class="col-md-4" style="padding-top:20px;font-style:oblique;font-size:20px;font-family:Open Sans;">';
		echo $pos[1]."<br/><br/><br/>";
		echo substr($pos[2],0,100)."<br/><br/><br/>";
		echo"<form action='login.php' method='post'><input type='submit' name='apply' values='APPLY'  class='btn btn-primary'></form>";
		echo'</div>';
		

	}
	mysql_close($con);
?>
</div>
<div class="container text-center" style="padding-top:30px;">
<h2 class="text-center" style="padding:40px 0;">Meet Our Team</h2>
<div class="col-md-12">
<div class="col-md-4" style="width:30% padding-left:30px;">
<img src="images/11.jpg" width=20%>
<div class="text-justify">
<h3>ANTHONY CASALENA</h3>
<h4>FOUNDER & CHIEF EXECUTIVE OFFICER</h4>
<p style="font-size:15px; font-style:oblique;">Anthony Casalena is the Founder and CEO of Squarespace, 
which he started from his dorm room in 2003. Anthony acted as the sole engineer, designer, and support representative for the entire Squarespace platform, 
 allowing for it to be a stable business from the outset.<i class="fa fa-twitter">@acasalena</i></p>
</div>
</div>
<div class="col-md-4" style="width:30%;">
<img src="images/15.jpg"  width=20%>
<div class="text-justify">
<h3>ANDREW BARTHOLOMEW</h3>
<h4>VICE PRESIDENT, STRATEGY</h4>
<p style="font-size:15px; font-style:oblique;"	>As the leader of Squarespace's Strategy division, 
Andrew is responsible for developing the analytical frameworks that shape the company’s business.
 Since joining Squarespace, he has grown the division into a team that covers everything from business.</p>
</div>
</div>
<div class="col-md-4" style="width:30%;">
<img src="images/01.jpg"  width=20%>
<div class="text-justify">
<h3>JOHN COLTON</h3>
<h4>CHIEF CREATIVE OFFICER</h4>
<p style="font-size:15px; font-style:oblique;">As the Chief Creative Officer of Squarespace, 
David leads the company’s award-winning creative team, 
whose work encapsulates all brand creative, brand design and product design efforts for the company. 
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer text-center bill">
<a href="index.php">Copy Rights@1001 <span>By the Job Portal</span></a>
</div>
</body>
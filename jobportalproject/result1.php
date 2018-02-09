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
<li><a href="profilepage.php">Profile</a></li>
<li><a href="alogout.php">Log Out</a></li>
</ul>
</div>
<div class="clear"></div>
</div><!--End of container-->
</nav>
<div class="container" style="margin-top:150px;">
<?php
include('config.php');
session_start();
if($_SESSION['id'])
{	
	$c=" ";
	$b=" ";
	$score=" ";
	$user=$_SESSION['id'];
	$sql1="select g.id,g.answers,r.qid,r.uid,r.ans1 from gen as g inner join result1 as r ON g.id=r.qid where r.uid='$user'";
	$res1=mysql_query($sql1);
	$num1=mysql_num_rows($res1);
    $a = "<div class='text-center trans'><h2>Total no of questions:</h2><h3>".$num1."</h3>";	
	$sql="select g.id,g.answers,r.qid,r.uid,r.ans1 from gen as g inner join result1 as r ON g.id=r.qid && g.answers=r.ans1 ";
	$res=mysql_query($sql);
	$num=mysql_num_rows($res);
	if($num)
	{
			$score=$num*1;
			$b = "<h2>Your Score is:</h2><h3>".$score."/10</h3>";
	}
	if($score>4)
	{
		$c = "<h2>You are selected for the final round</h2>";
		$ins1="insert into tpass(uid,score,pass) values('".$_SESSION['id']."','$score','Pass')";
		$res2=mysql_query($ins1);
		?>
		<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="border-radius:0px;">See Your Result</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $a; ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $b; ?></p>
		  <p><?php echo $c; ?></p>
        </div>
        <div class="modal-footer">
          <a  class="btn btn-primary" href="usermark.php">Close</a>
		  
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php
	}
	else
	{
		$c = "<h2>You failed the test</h2></div>";
		$ins1="insert into tpass(uid,score,pass) values('".$_SESSION['id']."','$score','Fail')";
		$res2=mysql_query($ins1);?>
		<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="border-radius:0px;">See Your Result</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $a; ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $b; ?></p>
		  <p><?php echo $c; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-primary" data-dismiss="modal">Close</button>
		  
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php
	}
}
?>
</div>
</body>
</html>
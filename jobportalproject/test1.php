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
<div class="container text-left"  style="margin-top:100px;font-style:bold;font-family:Times New Roman">
<div id="countdown" class="pull-right" style="font-style:bold;font-size:40px;">00:00</div>
<h2>C & C++ Test</h2><br/>
<form   action=" " method="post">
<div class="form-group" id="clock">
<?php
include('config.php');
session_start();
	if(isset($_SESSION['id']))
	{	
			$sql="select * from gen where tests='C&C++' ORDER BY RAND() LIMIT 10";
			$res=mysql_query($sql) or die(mysql_error());
			$i=1;
			$count=mysql_num_rows($res);
			$_SESSION['conf']=$count;
			while($row=mysql_fetch_array($res))
			{	
				echo "<label>";
				echo $i;
				echo ")".$row['que']."</label><br/><br/>";?>
				<input type='hidden' value="<?php echo $row['id'];?>" name="qid<?php echo $i;?>">
				<?php
				echo "<input type='radio' name='ans1".$i."'  class='gr1' value=1 onclick='chkcontrol(0)';>" .$row['option1']."&nbsp&nbsp";
				echo "<input type='radio' name='ans1".$i."'  class='gr1' value=2 onclick='chkcontrol(1)';>" .$row['option2']."&nbsp&nbsp";
				echo "<input type='radio' name='ans1".$i."'  class='gr1' value=3 onclick='chkcontrol(2)';>" .$row['option3']."&nbsp&nbsp";
				echo "<input type='radio' name='ans1".$i."'  class='gr1' value=4 onclick='chkcontrol(3)';>" .$row['option4']."&nbsp&nbsp<br/><br/>";
				$i++;
			}
	}
?>
<input type="submit" value="submit" name="finish" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">
</form>
</div>
</div>
<?php
if($_SESSION['id'])
{
	$id1=$_SESSION['id'];
	$count=$_SESSION['conf'];
	if(isset($_POST['finish']))
	{
		for($i=1;$i<=$count;$i++)
		{
		$xans1=$_POST['ans1'.$i];
		$qid=$_POST['qid'.$i];
		$ins="insert into result1(uid,qid,ans1) values('$id1','$qid','$xans1')";
		$res=mysql_query($ins) or die(mysql_error());
		header("location:result1.php");
		}
	}
}
?>

</body>
</html>
<script type="text/javascript">
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.form1.ans1.length;i++){
if(ans1[i].checked && total > 1){
alert("Please Select only one") 
ans1[j].checked = false ;
return false;
}
}
} 
</script>
</script>
<script>
function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
             self.location="result.php";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "countdown", 10, 00 );
</script>
<script type = "text/javascript">
    $(function () {
        $(document).keydown(function (e) {
            return (e.which || e.keyCode) != 116 && 75;
        });
    });
</script>
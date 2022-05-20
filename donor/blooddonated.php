<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
<style>
.hdd{
	height: 90px;
	background: #7c7f5e;
	color: red;
	padding-top: 25px;
	font-size: 45px;
	text-align: center;
	font-weight: bold;
}

.hddd{
	height: 80px;
	background: #7c7f5e;
	color: #fff;
	padding-top: 15px;
	font-size: 25px;
	text-align: center;
	font-weight: bold;
}
.ff{
	padding: 10px;
	color:#fff;
}
</style>
 <div class="hdd">
<div class="wrap">
<div class="header">

			Donate Blood & Save Life
	</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
	<ul class="nav">           
			<li   class="active"><a href="blooddonated.php">Blood Donated</a></li>
            <li><a href="viewdonations.php">My Donations</a></li>
            <li><a href="viewrequest.php">View Requests</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
			<li><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li> 
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div><br><br>
<div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#CCC;">
     <form method="post" enctype="multipart/form-data">
	 
	 
 <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
<tr bgcolor="#CCC">
   <td colspan="2"  align="center" class="hddd"><br>Blood Donated<br><br></td>
</tr>

<tr>
    <td style=" padding-left:100px;" >&nbsp; </td>

    <td style="vertical-align:top;padding-top:20px;">
			 
<table  cellspacing="0" cellpadding="0"  width="450px" height="200px">  

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from camp where camp_id='" .$_POST["s3"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$camp_id=$data[0];
	$camp_title=$data[1];
	$organized_by=$data[2];
	$state=$data[3];
	$city=$data[4];
	$pic=$data[5];
	$detail=$data[6];
		
		
	mysqli_close($cn);
}
?>
</td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td class="lefttd"  style="vertical-align:middle"> Date</td><td>
<select name="month">
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="3">MARCH</option>
<option value="4">APRIL</option>
<option value="5">MAY</option>
<option value="6">JUNE</option>
<option value="7">JULY</option>
<option value="8">AUG</option>
<option value="9">SEPT</option>
<option value="10">OCT</option>
<option value="11">NOV</option>
<option value="12">DEC</option>
</select>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<select name="year">
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>

</td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle">Number of Units (ml)</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{1,10}" title="please enter only numbers between 1 to 10 for no. of units" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Other Detail</td><td><textarea name="t4"></textarea></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Save" name="sbmt" style="border:0px; background:#999; width:100px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></table></td></tr>	</table></form>
	</div>
     <?php
	 
	 $cnnn=mysqli_connect("localhost","root","","bloodbank");
    $sss="select b_id from donarregistration where email='" . $_SESSION["email"] . "'";
	$result2=mysqli_query($cnnn,$sss);
	 while($data2=mysqli_fetch_array($result2))
	{
			 $bloodg = $data2["b_id"];
	}
			mysqli_close($cnnn);

if($bloodg==13)
{
	$s3 = "O+";
}
else if($bloodg==14)
{
	$s3 = "O-";
}
else if($bloodg==15)
{
	$s3 = "AB+";
}
else if($bloodg==16)
{
	$s3 = "AB-";
}
else if($bloodg==17)
{
	$s3 = "A+";
}
else if($bloodg==18)
{
	$s3 = "A-";
}
else if($bloodg==19)
{
	$s3 = "B+";
}
else if($bloodg==20)
{
	$s3 ="B-";
} 
	 
if(isset($_POST["sbmt"])) 
{
	$d=$_POST["day"]."-".$_POST["month"]."-".$_POST["year"];

$cn=makeconnection();
			$s="insert into donation(camp_id,ddate,units,detail,email) values('" . $s3. "','". $d ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";
			
			//INSERT INTO `donation`(`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
		

	

?> 	 

<br><br><br><br>
      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
<?php include('footer.php');?>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>
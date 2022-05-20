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
<?php
			
	$cn=mysqli_connect("localhost","root","","bloodbank");
			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	$pic=$data[8];
	
if($data[5]=="13")
{
	$b_idd= "O+";
}
else if($data[5]=="14")
{
	$b_idd= "O-";
}
else if($data[5]=="15")
{
	$b_idd= "AB+";
}
else if($data[5]=="16")
{
	$b_idd= "AB-";
}
else if($data[5]=="17")
{
	$b_idd= "A+";
}
else if($data[5]=="18")
{
	$b_idd= "A-";
}
else if($data[5]=="19")
{
	$b_idd= "B+";
}
else if($data[5]=="20")
{
	$b_idd= "B-";
	
}

	mysqli_close($cn);	
	
?> 
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
			<li><a href="blooddonated.php">Blood Donated</a></li>
            <li><a href="viewdonations.php">My Donations</a></li>
            <li><a href="viewrequest.php">View Requests</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
			<li><a href="chngpwd.php">Change Password</a></li>	
			<li class="active"><a href="updateprofile.php">Update Profile</a></li> 
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div><br><br>
<div style="height:500px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#CCC;">
 <form method="post">
<table cellpadding="20" cellspacing="20" width="700px" height="200px"  style="margin:auto" >
   <tr bgcolor="#CCC"><td colspan="7" align="center" class="hddd"><br>Update Profile<br><br></td></tr>
 <tr style="background-color:#999" align="center" class="ff">
	 
	 
     <table cellpadding="0" cellspacing="0" width="700px" style="margin:auto">
	 
    <td><img src="../doner_pic/<?php echo @$pic; ?>" style="padding-left:40px"  width="150px" height="150px"/>
    <input type="hidden" name="h1" value="<?php {echo @$pic;} ?>" />
	
    <td style="vertical-align:top" width="450px" height="400px">
                
	<table cellpadding="0" cellspacing="0" width="450px">
   <td style="vertical-align:top; padding-left:70px" width="500px">
   <table cellpadding="0" cellspacing="0" width="450px" align="center" >
    <tr><td class="lefttd"  style="vertical-align:middle"> Name </td><td><input type="text" name="t1" value="<?php echo @$name;  ?>"  required="required" pattern="[a-zA-Z _]{8,35}" title="please enter only character  between 8 to 35 for  name" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		 
		 <tr><td class="lefttd"  style="vertical-align:middle"> Blood Group </td><td><input type="text" value="<?php echo @$b_idd;  ?>" readonly /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		 
<tr><td class="lefttd">Gender</td><td>   <input name="r1" checked="checked" type="radio" value="Female" <?php if($gender=="Female"){ echo "checked" ;}  ?> />Female<input name="r1" type="radio" value="Male" <?php if($gender=="Male"){ echo "checked" ;} ?>/> Male </td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Age</td><td><input type="text" name="t2"  required="required" pattern="[0-9]{2,2}" title="please enter only numbers  between 2 to 2 for age" value="<?php echo @$age;?>" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><input type="text" name="t3" value="<?php echo @$mobile;?>"  pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         
		<tr><td>&nbsp;</td><td><input type="submit" value="Update" name="sbmt" style="border:0px; background:#999; width:100px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
        
        <tr><td colspan="2"  align="center"></td></tr>
        
		</table></table></td></tr>	</table></form>
	</div> 
   
<?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?> 


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
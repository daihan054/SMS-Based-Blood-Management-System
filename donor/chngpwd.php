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
	//header("location:../login.php");
	echo "<script>location.replace('login.php');</script>";
}
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
            <li ><a href="viewrequest.php">View Requests</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
			<li class="active"><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li> 
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div>
<br><br>
<div style="height:300px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#CCC;">
<form method="post"> 
     <table cellpadding="0" cellspacing="0" width="700px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center" class="hddd"><br>Change Password<br><br></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td width="150px"></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0">
   
        <tr><td class="lefttd"  style="vertical-align:middle"> Old Password:</td><td><input type="password" name="t2"  required="required" minlength="8" maxlength="30" title="please enter only character or numbers between 8 to 30 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> New Password:</td><td><input type="password" name="t3"  required="required" minlength="8" maxlength="30"  title="please enter only character or numbers between 8 to 30 for new password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Confirm Password:</td><td><input type="password" name="t4" required="required" minlength="8" maxlength="30"  title="please enter only character or numbers between 8 to 30 for confirm password"/></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Change" name="sbmt" style="border:0px; background: #999; width:100px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></td></tr></table>	
        </form>
	</div>
	<br><br><br><br><br><br>

      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
<?php include('footer.php');?>
	<div class="clear"></div>
</div>
</div>
</div>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"])) 
{
	
$aaa=$_POST["t3"];
$bbb=$_POST["t4"];

if( $aaa==$bbb)
{
	 $ccc=$bbb;
}
else
{ 
  echo "<script>alert('Sorry, The two passwords does not same.');</script>";
   $ccc="Hacker";
}
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	if($r>0)
	{
	if( $aaa==$bbb)
        {
	      $s1="update donarregistration set pwd='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
		
	      mysqli_query($cn,$s1);
		}
	mysqli_close($cn);
	
	if( $aaa==$bbb)
        {
	      echo "<script>alert('Record Save');</script>";
        }

	}
	else
	{
		echo "<script>alert('Invalid old Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>
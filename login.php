<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
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
<?php include('admin/function.php'); ?>


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
</style>
 <div class="hdd">
<div class="wrap">
<div class="header">

			Donate Blood & Save Life
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li><a href="index.php">Home</a></li>	
			<li><a href="registration.php">Donor Registration</a></li>            
			<li><a href="requests.php">Request for Blood</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
            <li><a href="search.php">Search</a></li>
			<li class="active"><a href="login.php">log In</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            </ul>
	</div>
  
   
<div style="height:350px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#CCC;">
     <form method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="700px" height="300px" style="margin:auto; margin-top:100px;" >

    <tr><td colspan="2" align="center" class="hddd"><br>Login<br><br></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t1" required="required"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password"name="t2"  required="required" title="please enter only character or numbers between 8 to 30 for password"  /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background: #999; width:100px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
 <tr><td style="font-size:14px">Not a donor ? </td><td ><a href="registration.php" style="color:#C30"> &nbsp; Click here</a> to registration.</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div>
<br><br><br><br>
       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
		
			<li class="active"><a href="index.php">Home</a></li>			
            <li><a href="Admin/index.php">Admin log In</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            </ul>
	</div>
<?php include('footer.php');?>
	<div class="clear"></div>
</div>
</div>
</div>		
		
		
		
	
</div>


<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
</body>
</html>
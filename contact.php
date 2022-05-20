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
			<li><a href="login.php">log In</a></li>
            <li class="active"><a href="contact.php">Contact Us</a></li>
            </ul><br><br><br>
	</div>

<div style="height:480px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#CCC;">
     <form method="post" enctype="multipart/form-data">

 <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
<tr bgcolor="#CCC">
   <td colspan="2"  align="center" class="hddd"><br>Contact Us<br><br></td>
</tr>

<tr>
    <td colspan="2">&nbsp;</td>
</tr>

<tr>
    <td colspan="2">&nbsp;</td>
</tr>

<tr>
    <td colspan="2">&nbsp;</td>
</tr>

<tr>
    <td style=" padding-left:100px;" >&nbsp; </td>

    <td style="vertical-align:top;padding-top:20px;">
  
<table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>
<tr><td class="lefttd">E-Mail:</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd">Mobile No:</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
<tr><td class="lefttd">Subject:</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr>


</table>

</td>
</tr>
</table>
</form>

</div>
		 
		 
        <div class="clear"></div> 		 
		 <br><br><br> <br><br><br> <br><br><br>
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

<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>
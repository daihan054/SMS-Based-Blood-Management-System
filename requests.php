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
			<li class="active"><a href="requests.php">Request for Blood</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
            <li><a href="search.php">Search</a></li>
			<li><a href="login.php">log In</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            </ul> <br><br><br><br>
	</div>
<div style="height:650px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#CCC;">
      
	 <form method="post" enctype="multipart/form-data">
 <table cellpadding="0" cellspacing="0" width="700px" height="480px" style="margin:auto" >

   <tr bgcolor="#CCC"><td colspan="2" align="center" class="hddd"><br>Send request for specific blood group<br><br></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   

            <tr ><td style=" padding-left:80px;" >&nbsp; </td>
			
                    <td style="vertical-align:top;padding-top:20px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">       

<tr><td class="lefttd">Patient Name</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,30}" title="please enter only character  between 5 to 30 for donor name" /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Blood Group </td><td><select name="t4" required>

<option value="">Select</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>

</select>



</select></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t5" required="required"  autocomplete="off"/></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Required Date</td><td>
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
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd">Address</td><td><textarea name="t7"></textarea></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background:#999; width:100px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
</td></tr>
</table>
</form>
        </div>
		
		<br><br><br><br><br><br>
          
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

<?php
if(isset($_POST["sbmt"])) 
{		
		
	$cn=makeconnection();
	require("sms.php");
		$d=$_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
		$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";		
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
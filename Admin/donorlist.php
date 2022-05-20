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

			Give Blood Save Life
	</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			
			<li><a href="viewrequest.php">View Blood Requests</a></li>
			<li><a href="donorlist.php">View Donor List</a></li>
			<li><a href="contactlist.php">View Contact List</a></li>
             <li><a href="logout.php">Log Out</a></li>
			<li>
              
            </li>
            </ul>
	</div><br><br>
<div style="height:auto; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#CCC;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr bgcolor="#CCC"><td colspan="7" align="center" class="hddd"><br>View Donor List<br><br></td></tr>
 
   
 <tr style="background-color:#999" align="center" class="ff">
 
             <td class="ff" >Blood Group</td><td >Name</td><td >Gender</td><td >Email</td><td >Mobile No</td>
        </tr>
                   
   <tr><td>&nbsp;</td><td>&nbsp;</td></tr> 

<?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from donarregistration";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);

	while($data=mysqli_fetch_array($result))
	{
				
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
				echo"<tr><td  style='padding-left:50px'>$b_idd</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[6]</td><td  style=' padding-left:50px'>$data[4]</td></tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
          	<br><br><br><br><br><br>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		
	</div>
		<?php include('footer.php');?>
	<div class="clear"></div>
</div>
</div>
</div>




			
			
	
</body>
</html>
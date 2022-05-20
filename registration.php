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
			<li ><a href="index.php">Home</a></li>	
			<li class="active"><a href="registration.php">Donor Registration</a></li>            
			<li><a href="requests.php">Request for Blood</a></li>
			<li><a href="donorlist.php">View Donor list</a></li>
            <li><a href="search.php">Search</a></li>
			<li><a href="login.php">log In</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            </ul>  <br><br><br><br>
	</div>
<div style="height:650px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#CCC;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >

    <tr bgcolor="#CCC"><td colspan="2"  align="center" class="hddd"><br>Register As A Donor<br><br></td></tr>
   
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
   
                <tr ><td style=" padding-left:100px;" >&nbsp; </td>
			
                    <td style="vertical-align:top;padding-top:20px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

<tr><td class="lefttd">Donor Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,35}" title="Enter only alphabetic character and length between 5 to 35 characters" /></td></tr>

<tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="Male" checked="checked">Male<input name="r1" type="radio" value="Female" >Female</td></tr>

<tr><td class="lefttd">Age (Must be between 18 to 45)</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="age must be between 18 to 45" /></td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
<tr><td class="lefttd"> Blood Group </td><td><select name="t4" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select></td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>

<tr><td class="lefttd">Password</td><td><input type="password" name="t6" minlength="8" maxlength="30" required="required" title="please enter only character or numbers for password" /></td></tr>
<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t7" minlength="8" maxlength="30" required="required" title="please enter only character or numbers for password" /></td></tr>

<tr><td class="lefttd">Uplode Pic (Less Than 1MB) </td><td><input type="file" name="t8" title="Please select a photo less than 1 MB" required="required" /></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background: #999; width:150px; height:30px; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
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
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
$aaa=$_POST["t6"];
$bbb=$_POST["t7"];
$xxx=$_POST["t2"];

if( $xxx>=18 && $xxx<=45)
{
	 $xxx1=$xxx;
}
else
{ 
  echo "<script>alert('Sorry, Age must be between 18 to 45.');</script>";
   $xxx1="Hacker";
}

if( $aaa==$bbb)
{
	 $ccc=$bbb;
}
else
{ 
  echo "<script>alert('Sorry, The two passwords does not same.');</script>";
   $ccc="Hacker";
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=makeconnection();
		if(( $aaa==$bbb) && ($xxx>=18 && $xxx<=45))
        {
			$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $ccc.  "','" . basename($_FILES["t8"]["name"])  ."')";
		}
			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
		if( $aaa==$bbb)
        {
	      echo "<script>alert('Record Save');</script>";
        }
	}
	else
	{
		if( $aaa==$bbb)
        {
		echo "<script>alert('Record save');</script>";
		}
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
?> 
</body>
</html>
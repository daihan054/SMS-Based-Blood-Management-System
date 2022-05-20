<?php 
$bloodg=$_POST["t4"];

if($bloodg=="O+")
{
	$b_idd = 13;
}
else if($bloodg=="O-")
{
	$b_idd= 14;
}
else if($bloodg=="AB+")
{
	$b_idd= 15;
}
else if($bloodg=="AB-")
{
	$b_idd= 16;
}
else if($bloodg=="A+")
{
	$b_idd= 17;
}
else if($bloodg=="A-")
{
	$b_idd= 18;
}
else if($bloodg=="B+")
{
	$b_idd= 19;
}
else if($bloodg=="B-")
{
	$b_idd= 20;
}

$cnn=mysqli_connect("localhost","root","","bloodbank");

$ss="select mobile from donarregistration where b_id=$b_idd;";
	$result1=mysqli_query($cnn,$ss);
	$rr=mysqli_num_rows($result1);
	
	while($data1=mysqli_fetch_array($result1))
	{
		$phone[]= $data1["mobile"];
		
	}
	$too = implode(', ' , $phone);
	
    mysqli_close($cnn);		

$name=$_POST["t1"] ;
$mobileno=$_POST["t3"];
$address=$_POST["t7"];
$bloodgroup=$_POST["t4"];

$to =$too;
$token = "1cf59e603d65ea816be9f8008ad7642b";
$message = "Name: $name Mobile Number: $mobileno Address: $address wants $bloodgroup blood. If you are willing to donated please contact.";

$url = "http://api.greenweb.com.bd/api.php";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
$smsresult = curl_exec($ch);

?>
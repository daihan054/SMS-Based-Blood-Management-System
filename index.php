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
		<?php require('header.php');?>
	</div>

        <div>

<div class="h_btm_bgf">
<div class="wrap">
<div class="h_btm">

	<div class="header-parag">
		<br><br><br><br>	
		<p align="justify"> আপনি কি জানেন  সারা পৃথিবীতে  প্রতি বছর  বাচ্চা জন্ম দিতে  প্রায় ৫ লক্ষ মহিলা মারা যায় , তাদের মধ্যে প্রায় ৯৯% ই  মারা যায় সঠিক সময়ে পর্যাপ্ত রক্তের অভাবে ।  কি চমকে উঠলেন ?  <br>শুধু মাত্র আপনার আমার একটু একটু প্রয়াস পারে এই সংখ্যাটা কমাতে । 
		<br> তাই আসুন রক্ত দেই জীবন বাচাই  ।  আজই আমাদের টিমে যোগ দিন ।  <a href="registration.php">Donor registration </a>থেকে রেজিস্টার করে আপনিও হয়ে উঠুন একজন রক্তদাতা । </p>
	</div>  <br><br><br>	<br>
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bgf">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
				<li>
				<img src="Images/slider0.jpg"/>
				</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider0.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main"><br><br><br>
	
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
		
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
</body>
</html>
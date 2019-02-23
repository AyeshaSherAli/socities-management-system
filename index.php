<!DOCTYPE html>
<html lang="en">
<head>
<title>SMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<link rel="stylesheet" href="css/responsiveslides.css" /> 
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script src="js/responsiveslides.js"></script>
<script>
	$(function () {
	  $("#slidez").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		maxwidth: 960,
		namespace: "centered-btns"
	  });
	});
</script>
<?php

require_once('includes/db.php');

 ?>
 
 <?php
   session_start();
 ?>


<!--Gurard Login Code -->


 <?php
if(isset($_SESSION['adminlogin'])){
        header("location:AdminHome.php");   
        exit;
    
    }
 $error='';
 if(isset($_POST['submit']))
{
 
  @$username = $_POST['name'];
  $password=$_POST['password'];
  
  if(empty($error))
 {
  $Query = mysql_query('Select * FROM admin WHERE name = "'. $username.'" AND password = "'.$password.'"');

 $rows = mysql_fetch_array($Query);
 
 if(isset($rows['id']))
  {

        if ($rows['name']== $username && $rows['password'] == $password)
        {
         $_SESSION['adminlogin'] = 'true';
            $_SESSION['adminName'] = $rows['name'];
      $_SESSION['adminId'] = $rows['id'];

        header("location:AdminHome.php");
        exit;
      
  }
  }else{
   $error='ID or Password you used is found wrong please try Again!';

    }
 }
}
?>

</head>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
				<header>
					<h2><a href="index.php"><font color="#FFFFFF" size="+10"><b style="font-size:52px">UE Societies Management System</b></font></a></h2>
					<nav>
					</nav>
                    <nav>
						<ul style="background-color:#312826" id="menu">
						<?php
						
						include('Includes/publicList.php');?>
							
						</ul>
					</nav>

				</header>
<!-- / header -->
<!-- content -->
				<article id="content">
					<div class="slider_bg">
						<div class="slider">
							<ul class="items">
								<li>
									<img src="images/img1.jpg" alt="">
									<div class="banner">
										<strong>UE SOCIETIES<span> Management System </span> </strong>
										<b>UE SMS</b>
										<p>
											<span>We provide you realty of servicess.</span>
										</p>
									</div>
								</li>
								<li>
									<img src="images/img2.jpg" alt="">
									<div class="banner">
										<strong>UE SOCIETIES<span>Management System</span></strong>
										<b>UE SMS</b>
										<p>
											<span>We provide you realty of servicess.</span>
										</p>
									</div>
								</li>
								<li>
									<img src="images/img3.jpg" alt="">
									<div class="banner">
										<strong>UE SOCIETIES<span>Management System</span></strong>
										<b>UE SMS</b>
										<p>
											<span>We provide you realty of servicess.</span>
										</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="slider-response">
							<div class="rslides_container">
								<ul class="rslides" id="slidez">
									<li><img src="images/img1.jpg" alt=""></li>
									<li><img src="images/img2.jpg" alt=""></li>
									<li><img src="images/img3.jpg" alt=""></li>
								</ul>
							</div>
	                    </div>
					</div>
					<div class="wrap">
						<section  class="col-1-3"  ><div class="wrap-col">
							<div class="box">
								<div>
									<h2>ADMIN LOGIN</h2>
								
									<p > <form method="post" action="index.php">
  <label class="input_field"   >UserName : </label> 
  <br/>
  <input type="text" style="background-color:#C5BFC0" name="name" class="input_field" />
  <br/>
  <br/><label class="input_field" >Password : </label>
  <br/>
 <input type="password" style="background-color:#C5BFC0" name="password" class="input_field" />
 <br/>
 <br/>
 <input type="submit" style="background-color:#C5BFC0;" class="input_field" ; value="Submit" name="submit" />
           <style>
           .input_field{
			   font-size:20px;
			   color:black; }
           </style>
            </form>
         	<?php if(@$error){
		  ?>
		<table class="error">
         <tr><td><center>
		<?php echo @$error;?></center>
        </td></tr></table><?php
		  }?>
									
								</div>
							</div>
						</div></section>

					</div>
				</article>
			</div>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
			
		</article>
<!-- / content -->
	</div>
</div>
<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col-2-3"><div class="wrap-col">
						<h3 style="font-size:36px">UNIVERSITY OF EDUCATION, LAHORE</h3>
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<h3 style="font-size:36px">Follow Us </h3>
						<ul id="icons">
							<li><a href="www.facebook.com" target="new" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>							
                            <li><a href="www.twitter.comj" target="new" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
						</ul>
					</div></section>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
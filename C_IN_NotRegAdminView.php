 <!DOCTYPE html>
<html lang="en">
<head>
<?php
 $server = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'step_in_security';
 
 $conn = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server\n" . mysql_error ());
 mysql_select_db($db, $conn) 
 or die ("Could not connect to database\n" . mysql_error ());
?>


<?php
//SQL Qurry to load Data from DB

$ddl=mysql_query("select * from cnic_info")or die(mysql_error());
?>


 <?php 
require_once('includes/db.php');
if(isset($_POST['submit']))
{
      	$cnic_no_frm=$_POST['cnic_no_frm'];
		
		$emp_name_frm=$_POST['emp_name_frm'];
		
		$emp_address_frm=$_POST['emp_address_frm'];
		
		$phNum=$_POST['phNum'];
		
		date_default_timezone_set("Asia/Karachi");

 $d=date('D/M/Y '  );
$t=date('h:i:s A'  );
$in="in";	
		
		
{    //our SQL Querry 
   $sql="INSERT INTO `c_in_reg`(`id`, `cnic_name`, `cnic_ph`, `time`, `date`, `stat`, `name`, `address`, `phNum`) VALUES ('','$cnic_no_frm','$phNum','$d','$t','$in','$emp_name_frm','$emp_address_frm','$phNum')";           
       $query = mysql_query($sql,$connection) ;		
            if (mysql_affected_rows($connection) == 0) { 
                echo 'Your record is not submited.'; 
            } else {
			    echo '<script>window.location="?status=added"</script>';
            } 
        }     
}
?>
  
<title>SMS</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/TablesCSS.css" type="text/css" media="all">
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

</head>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main zerogrid">
<!-- header -->
				<header>
					<h2><a href="index.php"><font color="#FFFFFF" size="+3"><b style="font-size:52px">UE Societies Management System</b></font></a></h2>
					<nav>
						<ul id="top_nav">
						</ul>
					</nav>
					<nav>
					<nav>
						<ul style="background-color:#312826" id="menu">
						<?php
						
						include('Includes/adminList.php');?>
							
						</ul>
					</nav>
				</header>
<!-- / header -->
<!-- content -->
				<article id="content">
					
					<div class="wrap">
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Welcome to UE SMS</h2>
									<figure><img src="images/images.jpg" alt="" ></figure>
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Reports</h2>
									<figure></figure>
                                    <style> li a{
						font-size:16px;
						color:black;}</style>
                                    <ol>
		 <li><a href="Reportmeetingplan_rr.php">Meeting Plan Report</a></li>
         <li><a href="Reportmeetingplan_evaluation_rr.php">Evaluation Report</a></li>
		 <li><a href="performancemo.php">performance monitoring Report</a></li>
								</ol></div>
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
			<div class="wrapper">
				<section class="col-2-3">
				
               		<div class="wrapper">
                    
						<div class="col-1-2"><div class="wrap-col">
							<div class="wrapper pad_bot2">
								<!--Content Div-->
                                
							</div>
							<div class="wrapper">
								
							</div>
						</div></div>
						<div class="col-1-2"><div class="wrap-col">
							<div class="wrapper pad_bot2">
								<figure class="left marg_right1"></div>
							<div class="wrapper">
								<figure class="left marg_right1">
							</div>
						</div></div>
					</div>
				</section>
				<section class="col-1-3"></section>
			</div>
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
						<h3 style="font-size:36px"> UNIVERSITY OF EDUCATION, LAHORE</h3>
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<h3 style="font-size:36px">Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
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
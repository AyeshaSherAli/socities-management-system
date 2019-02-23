<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "step_in_security";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
if(mysqli_connect_errno()) {
die("Database connection failed: " . 
mysqli_connect_error() . 
" (" . mysqli_connect_errno() . ")"
);
}
?>
<div align="center">
<?php 
if(isset($_POST['cnic_sub1_frm'])){ 

$cnic_no_frm = $_POST['emp_desig_frm'];
$cnic_name_frm = $_POST['meet_No'];
$cnic_fname_frm = $_POST['cnic_fname_frm'];
$cnic_dob_frm = $_POST['cnic_dob_frm'];
$cnic_address_frm = $_POST['emp_status_frm'];
$cnic_expiry_frm = $_POST['cnic_address_frm'];

$sqlinsert = "INSERT INTO meating_sett (society_name, mee_No, m_Aggenda, datetimem, m_duration, no_of_std) 
Values ('$cnic_no_frm', '$cnic_name_frm',  '$cnic_fname_frm','$cnic_dob_frm','$cnic_address_frm','$cnic_expiry_frm');";
//echo $sqlinsert;
if (mysqli_query($connection, $sqlinsert)) {
    echo "<span style='color:blue; background:green;'>"."Meeting Successfully Registered "."</span>";
} else {
//echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
    echo "<span style='color:white; background:red;'>"."Error: Meeting Not Registered"."</span>";
}
}
?>
</div>
<?php
  //Close database connection
  mysqli_close($connection);
?>    <!DOCTYPE html>
<html lang="en">
<head>
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
						<ul style="background-color:#312826" id="menu">
						<?php
						
						include('Includes/guardList.php');?>
							
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
									<figure><img src="images/images.jpg" height="30%" ></figure>
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Student Home</h2>
									<figure></figure>
									<style> li a{
						font-size:16px;
						color:black;}</style>
	<ol>	<li><a href="Contacts_std.php">Feed Back</a></li>	                      
            <li><a href="StudentInfo_std.php">Student Participation Foam</a></li> 
            <li><a href="Reportmeetingplan_std.php">Meating Plan Report</a></li> 
	</ol>
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
			<div class="wrapper">
				<section class="col-4-4">
					<h2><font color="black" >Meetings Plan Report</font></h2>
					<strong>
     Sr. No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Society Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Meeting No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Aggenda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Meeting Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Duration</strong>
					<?php
$co = 1;
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM meating_sett');

 $rows = mysql_fetch_array($Query);

 ?>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$co. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows['society_name'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows['mee_No'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows['m_Aggenda'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows['datetimem'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows['m_duration']."</td>";
 $co++;
}
 }
?>
<br>
<br>
</div>   
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
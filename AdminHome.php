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
$cnic_no_frm = $_POST['cnic_no_frm'];
$cnic_name_frm = $_POST['cnic_name_frm'];
$cnic_fname_frm = $_POST['cnic_fname_frm'];
$cnic_dob_frm = $_POST['cnic_dob_frm'];
$cnic_address_frm = $_POST['cnic_address_frm'];
$cnic_expiry_frm = $_POST['cnic_expiry_frm'];
$emp_status_frm = $_POST['emp_status_frm'];
$std_prog = $_POST['std_p'];
$std_pdate = $_POST['std_py'];
$std_soc = $_POST['emp_desig_frm'];

$sqlinsert = "INSERT INTO cnic_info (cnic_no, cnic_name,cnic_fname, cnic_dob, cnic_address, cnic_expiry, emp_status,Std_Program,Pay_Year,std_soc) 
Values ('$cnic_no_frm', '$cnic_name_frm','$cnic_fname_frm','$cnic_dob_frm','$cnic_address_frm','$cnic_expiry_frm', '$emp_status_frm','$std_prog','$std_pdate','$std_soc');";

if (mysqli_query($connection, $sqlinsert)) {
    echo "<script> alert('Student registered successfuly')</script>";
} else {
//echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
    echo "<script> alert('Student can not registered')</script>";
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
					</nav>
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
									<h2>Welcome to UE SMS!</h2>
									<figure><img src="images/images.jpg" height="30%" ></figure>
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>ADMIN HOME</h2>
<style> li a{
						font-size:16px;
						color:black;}</style>	
                        <ol>			
		 <li><a href="EmployeeInfo.php">Create Society</a></li> 
         <li><a href="meetingHome.php">Create Meeting</a></li> 
		 <li><a href="AdminHome.php">Register Students</a></li>
         <li><a href="StaffInfo.php">Register Teachers</a></li>
         <li><a href="StudentInfo.php">Student Teacher Participation </a></li>
		 <li><a href="Reportmeetingplan.php">Meeting Plan Report</a></li>
          <li><a href="Reportmeetingplan_evaluation.php">Evaluation Report</a></li>	
         <li><a href="notification_frm.php">Create Event Notification</a></li>	
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
					<h2 style="color:black";>Student Registration Form</h2>
               
               <form action="AdminHome.php" method="post" name="frm1" class="frm1"> 
  Student Id <br>

<input name="cnic_no_frm"  class="checkout-input checkout-name"  type="text" size="30" maxlength="13" >
<br><br>

Student Name<br>

<input name="cnic_name_frm" type="text" class="checkout-input checkout-name"  size="25" required><br>
<br>
Password<br>
<input name="password" type="password" class="checkout-input checkout-name" >
<br><br>

Father Name<br>

<input name="cnic_fname_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="100"  title="Invalid CNIC Father Name" required><br>
<br>

Session <br>

<input name="cnic_dob_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>
<br>
CNIC No.<br>

<input name="emp_status_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>
<br>
Address<br>
<input name="cnic_address_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="300"  ><br>
<br>

Phone No.<br>

<input name="cnic_expiry_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50" ><br>
<br>

Student Program<br>

<input name="std_p" type="text" class="checkout-input checkout-name"  size="50" maxlength="50" ><br>
<br>
Passing Year<br>

<input name="std_py" type="text" class="checkout-input checkout-name"  size="50" maxlength="50" ><br>
<br>

Society<br>


<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM society_detail');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="checkout-input checkout-name" name="emp_desig_frm" size="1" style="width:320;" required>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option selected='true' value='". $rows['so_name'] ."'>" . $rows['so_name'] ."</option>";
}
 }
?>


</select><br>
<br>


<input class="checkout-input checkout-name" type="reset" class="button1" value="Clear">
<input class="checkout-input checkout-name" name="cnic_sub1_frm" class="button1" type="submit" value="Add">
</td>
  <style>
           .input_field{
			   font-size:20px;
			   color:black; }
           </style> 
</form>
               
               
               
               
               
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
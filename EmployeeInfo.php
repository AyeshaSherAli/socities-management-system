 <!DOCTYPE html>
<html lang="en">
<head>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
include "dbconnection.php" 
?>
 <?php 
if(isset($_POST['cnic_sub1_frm'])){ 

$cnic_no_frm = $_POST['cnic_no_frm'];
$emp_id_frm = $_POST['emp_id_frm'];
$emp_name_frm = $_POST['emp_name_frm'];
$emp_desig_frm = $_POST['emp_desig_frm'];
$emp_address_frm = $_POST['emp_address_frm'];
$emp_cnum_frm = $_POST['emp_cnum_frm'];
$emp_email_frm = $_POST['emp_email_frm'];
$emp_ddept = $_POST['emp_dept'];

$sqlinsert = "INSERT INTO society_detail (So_id, so_name, so_budget, so_task, so_desc, so_from, so_till,so_department) 
Values ('$cnic_no_frm', '$emp_id_frm',  '$emp_name_frm','$emp_desig_frm','$emp_address_frm','$emp_cnum_frm', '$emp_email_frm','$emp_ddep');";

if (mysqli_query($connection, $sqlinsert)) {
     echo "<span style='color:blue; background:yellow;'>"."Society Successfully Created"."</span>";
} else {
    //echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
echo "<span style='color:red; background:yellow;'>"."Error:"."<br>"." "."<br>"."Society Already Exists"."</span>";

}
}
?>
<?php
  //Close database connection
  mysqli_close($connection);
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
									<figure><img src="images/images.jpg" height="30%" ></figure>
									
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>ADMIN HOME</h2>
									<figure></figure>
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
						</ol>	</div>
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
					<h2 style="color:black";>Society Registeration Form</h2>
               
    <form action="EmployeeInfo.php" method="post"> 
Society Id <br />

   <input name="cnic_no_frm"  class="checkout-input checkout-name"  type="text" size="50" >
<br /> <br />

Society task<br/>
   <input name="cnic_no_frm"  class="checkout-input checkout-name"  type="text" size="50" >
<br /><br />

Society Name<br />

   <input name="emp_id_frm"  class="checkout-input checkout-name"  type="text" size="50" >
<br />
<br />
Society Budget<br />

<input name="emp_name_frm"  class="checkout-input checkout-name"  type="text" size="50" >
<br />
<br />

Description<br>
<input name="emp_address_frm"  class="checkout-input checkout-name"  type="text" size="50" ></td>
<br />
<br>
From (Date)<br />
<input name="emp_cnum_frm"  class="checkout-input checkout-name"  type="date" size="50" ></td>
<br />
<br />
Till (Date)<br />
 <input name="emp_email_frm"  class="checkout-input checkout-name"  type="date" size="50" ></td>
 <br>
<br>

Department<br />
 <input name="emp_dept"  class="checkout-input checkout-name"  type="text" size="50" ></td>
 <br>
<br>
    <input class="checkout-input checkout-name" type="reset" value="Clear">
    <input class="checkout-input checkout-name" name="cnic_sub1_frm" type="submit" value="Add">
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
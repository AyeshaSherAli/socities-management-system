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
									<h2>Admin Home</span></h2>
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
					<h2 style="color:black";> Meeting Registration Form</h2>
               
               <form action="meetingHome.php" method="post" name="frm1" class="frm1"> 
 Select Society <br>

<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM society_detail');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="checkout-input checkout-name" name="emp_desig_frm" size="1" style="width:327;" required>
 <option selected="true" disabled value="">Please Select</option>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option  value='". $rows['so_name'] ."'>" . $rows['so_name'] ."</option>";
}
 }
?>

</select>
<br>
<br>
Meeting No.<br>

<input class="checkout-input checkout-name" name="meet_No" size="1" style="width:327;" >

<br><br>
Meeting Agenda <br>

<input name="cnic_fname_frm" type="text" class="checkout-input checkout-name" style="width:327;"  maxlength="100"  title="Invalid CNIC Father Name" required><br>
<br>

Date & Time <br>

<input name="cnic_dob_frm" type="date" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>
<br>
Meeting Duration (60 OR 70 Min) etc..<br>

<input name="emp_status_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>

<br>

No of Present Students (Attendance)<br>

<input name="cnic_address_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="300"  ><br>
<br>


<input class="checkout-input checkout-name" type="reset"  value="Clear">
      <input name="cnic_sub1_frm" class="checkout-input checkout-name" type="submit" value="Add"></td>
   
</form>
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
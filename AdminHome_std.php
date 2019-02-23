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
$password = $_POST['password'];
$cnic_name_frm = $_POST['cnic_name_frm'];
$cnic_fname_frm = $_POST['cnic_fname_frm'];
$cnic_dob_frm = $_POST['cnic_dob_frm'];
$cnic_address_frm = $_POST['cnic_address_frm'];
$cnic_expiry_frm = $_POST['cnic_expiry_frm'];
$emp_status_frm = $_POST['emp_status_frm'];
$std_prog = $_POST['std_p'];
$std_pdate = $_POST['std_py'];
$std_soc = $_POST['emp_desig_frm'];

$sqlinsert = "INSERT INTO cnic_info (cnic_no, password,cnic_name, cnic_fname, cnic_dob, cnic_address, cnic_expiry, emp_status,Std_Program,Pay_Year,std_soc) 
Values ('$cnic_no_frm','password', '$cnic_name_frm',  '$cnic_fname_frm','$cnic_dob_frm','$cnic_address_frm','$cnic_expiry_frm', '$emp_status_frm','$std_prog','$std_pdate','$std_soc');";

if (mysqli_query($connection, $sqlinsert)) {
    echo "<span style='color:blue; background:green;'>"."Student Registered Successfully"."</span>";
} else {
//echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
    echo "<span style='color:white; background:red;'>"."Error: Student Id Already Exists"."</span>";
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
					<h2><a href="index.php"><font color="#FFFFFF" size="+3"><b style="font-size:52px" >UE Societies Management System</b></font></a></h2>
					<nav>
						<ul id="top_nav">
						</ul>
					</nav>
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
                                <p></p>
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
                        <ol>
					<ol>				
		    <li><a href="Contacts.php">Feed Back</a></li>                   
            <li><a href="StudentInfo_std.php">Student Participation Foam</a></li> 
            <li><a href="Reportmeetingplan_std.php">Meeting Plan Report</a></li> 
<li><a href="#">Student Profile</a></li>	
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
				<section class="col-2-3">
					<h2 style="color:black">Student Registration Form</h2>
               
               <form action="AdminHome.php" method="post" name="frm1" class="frm1"> 
 Student <br>

<input name="cnic_no_frm"  class="checkout-input checkout-name"  type="text" size="30" maxlength="13" >
<br>

<br>
Student Name<br>

<input name="cnic_name_frm" type="text" class="checkout-input checkout-name"  size="25" required><br>
<br>
Password
<br>
<input name="password" type="password" class="checkout-input checkout-name" required>
<br>
<br>
Father Name<br>

<input name="cnic_fname_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="100"  title="Invalid CNIC Father Name" required><br>
<br>

Session <br>

<input name="cnic_dob_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>
<br>
CNIC No.<br>

<input  name="emp_status_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50"  ><br>

<br>

Address<br>

<input name="cnic_address_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="300"  ><br>
<br>

Phone No.<br>

<input name="cnic_expiry_frm" type="text" class="checkout-input checkout-name"  size="50" maxlength="50" ><br>
<br>

Student Program<br>
<select class="checkout-input checkout-name" >
<option>BS IT</option>
<option>BS ZOOLOGY</option>
<option>BS BOTANY</option>
<option>BS CHEMISTRY</option>
<option>BS MATHS</option>
<option>BS PHYSICS</option>
<option>BS ENGLISH</option>
<option>BS EDUCATION</option>
<option>BED</option><option>MA EDUCATION</option><option>MA ENGLISH</option><option>MA URDU</option>
<option>MSC IT</option><option>MSC CHEMISTRY</option><option>MSC PHYSICS</option><option>MSC MATHS</option>
</select>
<br>
<br>
Passing Year<br>
<select class="checkout-input checkout-name">
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select>
<br>

<br>
Society<br>


<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM society_detail');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="checkout-input checkout-name" name="emp_desig_frm" size="1" style="width:327;" required>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option selected='true' value='". $rows['so_name'] ."'>" . $rows['so_name'] ."</option>";
}
 }
?>
</select><br>
<br>


<input class="checkout-input checkout-name" type="reset"  value="Clear">
      <input class="checkout-input checkout-name" name="cnic_sub1_frm"  type="submit" value="Add"></td>
   
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
						<h3 style="font-size:36px">UNIVERSITY OF EDUCATION, LAHORE</h3>
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
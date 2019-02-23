 <!DOCTYPE html>
<html lang="en">
<head>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
include "dbconnection.php" 
?>
<?php 


if(isset($_POST['cnic_sub1_frm'])){ 

$cnic_no_frm = $_POST['student_desig_frm'];
$stu_rno_frm = $_POST['temp_desig_frm'];
$stu_name_frm = $_POST['tsec_desig_frm'];
$stu_class_frm = $_POST['t_name_till'];


$sqlinsert = "INSERT INTO  notification_frm (std_id, tec_id, agen_me, desc_noti) 
Values ('$cnic_no_frm', '$stu_rno_frm','$stu_name_frm','$stu_class_frm');";



if (mysqli_query($connection, $sqlinsert)) {
    echo "<span style='color:blue; background:yellow;'>"."Notification Successfully Send"."</span>";
} else {
    //echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
echo "<span style='color:red; background:yellow;'>"."Error:"."<br>"." CNIC Number Not Exists"."<br>"."Student Already Exists"."</span>";
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
					<h2><a href="index.php"><font color="#FFFFFF" size="+3"><b>Society Management System</b></font></a></h2>
					<nav>
						<ul id="top_nav">
							<li class="end"><a href="Contacts.php"><font color="#FFFFFF">Feed back</font></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
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
									<h2>Welcome <span>to Us!</span></h2>
									<figure><img src="images/images.jpg" height="30%" ></figure>
									
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>About <span>Us</span></h2>
									<figure></figure>
									
		 <li><a href="AdminHome_std.php">Register Student </a></li>                   
            <li><a href="StudentInfo_std.php">Student Participation Foam</a></li> 
            <li><a href="Reportmeetingplan_std.php">Meeting Plan Report</a></li> 
<li><a href="notification_frmstd.php">Create Event Notification</a></li>							
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Our <span>Services</span></h2>
									<figure><img src="images/02.jpg" alt="" ></figure>
									<ul class="list1 pad_bot1">
									<!--	<li><a href="#">Multan</a></li>-->
										
									
									</ul>
								<!--	<a href="TimeTable.php" class="button1">View More</a>-->
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
					<h2>Event Notification Form</h2>
               
<form action="notification_frm.php" method="post"> 
    Student Name<br>
<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM cnic_info');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="button1" name="student_desig_frm" size="1" style="width:327;" required>
 <option selected="true" disabled value="">Please Select</option>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option  value='". $rows['cnic_name'] ."'>" . $rows['cnic_name'] ."</option>";
}
 }
?>

</select>
<br>
<br>


Teacher Name<br>
<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM teachers_rec');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="button1" name="temp_desig_frm" size="1" style="width:327;" required>
 <option selected="true" disabled value="">Please Select</option>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option  value='". $rows['Teacher_Name'] ."'>" . $rows['Teacher_Name'] ."</option>";
}
 }
?>

</select>
<br>
<br>
Agenda<br>
<?php
require_once('includes/db.php');
if(empty($error))
 {
$Query = mysql_query('Select * FROM meating_sett');

 //$rows = mysql_fetch_array($Query);

 ?>
 <select class="button1" name="tsec_desig_frm" size="1" style="width:327;" required>
 <option selected="true" disabled value="">Please Select</option>
 <?php
 while($rows=mysql_fetch_array($Query)){
     echo "<option  value='". $rows['m_Aggenda'] ."'>" . $rows['m_Aggenda'] ."</option>";
}
 }
?>

</select>

<br>
<br>
Any Description(s)<br>
<input name="t_name_till" class="checkout-input checkout-name" type="text" width="30" maxlength="100" >
<br>
<br>




    <input class="button1" type="reset" value="Clear">
    <input class="button1" name="cnic_sub1_frm" type="submit" value="Add">
   
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
						<h3>Virtual University Of <span>PAKISTAN</span></h3>
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
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
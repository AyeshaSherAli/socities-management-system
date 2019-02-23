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
$ss_id_frm = $_POST['ss_id_frm'];
$ss_name_frm = $_POST['ss_name_frm'];
$ss_desig_frm = $_POST['ss_desig_frm'];
$ss_address_frm = $_POST['ss_address_frm'];


$sqlinsert = "INSERT INTO  teachers_rec (T_Id, Teacher_Name, t_address, t_Phone, t_Subject) 
Values ('$cnic_no_frm', '$ss_id_frm',  '$ss_name_frm','$ss_desig_frm','$ss_address_frm');";



if (mysqli_query($connection, $sqlinsert)) {
    echo "<span style='color:blue; background:yellow;'>"."Teacher Added Successfully"."</span>";
} else {
    //echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connection);
echo "<span style='color:red; background:yellow;'>"."Error:"."<br>"."  "."<br>"."Staff Already Exists"."</span>";
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
					<h2><a href="index.php"><font color="#FFFFFF" size="+3"><b>UE Societies Management System</b></font></a></h2>
					<nav>
						<ul id="top_nav">
							<li class="end"><a href="Contacts.php"><font color="#FFFFFF">Feed back</font></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
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
									<h2>Welcome <span>to Us!</span></h2>
									<figure><img src="images/images.jpg" height="30%" ></figure>
									<p class="pad_bot1">We provide you realty of servicess..</p>
									
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>About <span>Us</span></h2>
									<figure></figure>
		 <p class="pad_bot1">We provide you realty of servicess..</p>
		 <li><a href="EmployeeInfo.php">Create Society</a></li> 
         <li><a href="meetingHome.php">Create Meeting</a></li> 
		 <li><a href="AdminHome.php">Register Students</a></li>
         <li><a href="StaffInfo.php">Register Teachers</a></li>
         <li><a href="StudentInfo.php">Student Teacher Participation </a></li>
		 <li><a href="Reportmeetingplan.php">Meeting Plan Report</a></li>
          <li><a href="Reportmeetingplan_evaluation.php">Evaluation Report</a></li>	
         <li><a href="notification_frm.php">Create Event Notification</a></li>	
		
								</div>
							</div>
						</div></section>
						<section class="col-1-3"><div class="wrap-col">
							<div class="box">
								<div>
									<h2>Our <span>Services</span></h2>
									<figure><img src="images/02.jpg" alt="" height="50%"></figure>
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
					<h2>Teacher Registration Foam</h2>
               
              
  <form action="staffinfo.php" method="post"> 
    Teacher Id<br>
<input name="cnic_no_frm" class="checkout-input checkout-name" type="text" size="50" maxlength="13"  ><br>
<br>Teacher Name<br>

<input name="ss_id_frm" class="checkout-input checkout-name" type="text" size="50" maxlength="6"  ><br>
<br>Address<br>

<input name="ss_name_frm" class="checkout-input checkout-name" type="text" size="50" maxlength="100"  ></td>
  <br>
<br>Phone No.<br>

<input name="ss_desig_frm" class="checkout-input checkout-name" type="text" size="50" maxlength="100"  ></td>
    
    </select><br>
	<br>
Subject<br>
<input name="ss_address_frm" class="checkout-input checkout-name" type="text" size="50" maxlength="300"  title="Invalid Home Address" pattern="([a-zA-Z0-9 ]| |/|\|@|#|$|%|&|,|-)+" required></td>
<br><br>
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
						<h3>University Of Education,<span>Lahore</span></h3>
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
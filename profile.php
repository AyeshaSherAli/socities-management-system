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

$sql="SELECT * FROM cnic_info";
$RECORD= mysql_query($sql);

?>

<?php
  //Close database connection
  //mysqli_close($connection);
?>   

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>profile</title>
</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr><th>Student Id</th><th>Password </th> <th>Name</th> <th>Father Name</th> <th> Date Of Birth</th><th>Address</th>
<th>Session</th><th>Program</th><th>Passing Year</th><th>Society</th></tr>
<?php
while($info=@mysqli_fetch_row($RECORD)){
	echo "<tr>";
	echo "<td>".$info['cnic_no']."</td>";
	echo "<td>".$info['password']."</td>";
	echo "<td>".$info['cnic_name']."</td>";
	echo "<td>".$info['cnic_fname']."</td>";
	echo "<td>".$info['cnic_dob']."</td>";
	echo "<td>".$info['cnic_address']."</td>";
	echo "<td>".$info['cnic_expiry']."</td>";
	echo "<td>".$info['Std_Program']."</td>";
	echo "<td>".$info['Pay_Year']."</td>";
	echo "<td>".$info['std_soc']."</td>";

	}?>
</table>
</body>
</html>
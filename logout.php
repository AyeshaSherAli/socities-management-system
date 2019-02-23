<?php
    session_start();
   {
         unset($_SESSION['adminlogin']);
        unset($_SESSION['adminName'] );
		 unset($_SESSION['adminId'] );
		 
		 
		  unset($_SESSION['guardlogin']);
        unset($_SESSION['guardName'] );
		 unset($_SESSION['guardId'] );
		 
		 
        header("location: index.php");
        exit;
            
    }
?>

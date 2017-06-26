<?php
require('connection.php'); 
?>

<?php
  
	if(isset($_POST['submit']))
		{
		$Fname = $_POST['Fname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$DOB= $_POST['DOB'];
		$pword = $_POST['pword'];

		$insertpost = (" INSERT INTO `registration`(`Fname`, `username`, `email`, `DOB`, `pword`) VALUES ('$Fname','$username','$email','$DOB','$pword') ");


    if( $conn -> query($insertpost)==TRUE {
       echo "saved";
      echo "<script>window.open('signin.html','_self')</script>";
     }
     else {
        echo "not working";
     }
 	}

     ?>
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db 	= "newblog";

$conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);

// Check connection

/*if ($conn->connect_error) {
	echo "Connection was failed";
}
else{
	echo "Connection was successful";
}*/

/*<?php
	$get_data = "SELECT * FROM data";
	$query_data = mysqli_query($conn, $get_data);
	while ($row_data = mysqli_fetch_array($query_data)) {
		$id = $row_data ['ID'];
		$name= $row_data ['Name'];
		$email = $row_data ['Email'];
		$contact = $row_data ['Contact'];
	}
		echo $id . '&nbsp;&nbsp;'. $name . '&nbsp;&nbsp;'. $email.'&nbsp;&nbsp;'. $contact;





		<?php 

	include ('connection.php');
	error_reporting(0);
	$username = $_POST['fname'] ;
	$useremail = $_POST['umail'];
	$usercontact =$_POST['ucon'];

	if (!$_POST['submit']) {
		echo "All fields are required";
	}
	else{
		$sql = "INSERT INTO Data(Name, Email, Contact)
		values ('$username', '$useremail', '$usercontact') ";

		if (mysqli_query($conn, $sql)) {
			echo "Data creation successful";
			
		}
		else {
			 echo "Something went wrong, try later";
		}
	}

 ?>
	

	?>*/	


?>
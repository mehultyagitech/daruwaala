<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "daruwala");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$msg = $_REQUEST['msg'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact VALUES ('$name','$email','$msg')";
		
		if(mysqli_query($conn, $sql)){
			echo "FORM SUBMILTTED SUCESFULLY ";

			echo nl2br("\n$name"
				. " $email\n $msg");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	<?php
if(isset($_POST['btn'])){
    $to = "mehultyagi101@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $msg = $_POST['msg'];
    $headers = 'From: '.$email . "\r\n";

    if(mail($to, $name,  $email,$msg , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>
</body>

</html>

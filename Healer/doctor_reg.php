<?php

session_start();
if (isset($_SESSION['login'])) {
    header("location:index.php");
    die();
}

include("admin/connect.php");

$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];



$sql = "INSERT INTO doc_reg (username,email,password) 
VALUES ('$name', '$email' , '$password')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php

header("Location: doctorloginmain.php");
exit();


}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
	}
	

?>
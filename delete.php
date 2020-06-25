<?php
$conn = new mysqli('localhost' , 'root' , '' , 'digi_saccco');

  $id = $_GET['id'];

  if(isset($id)){

  	//Delete user records where id = '$id'
  	$sql = "DELETE FROM `loan_application` WHERE `loan_application`.`id` = $id";
  	if ($conn->query($sql)) {
  		header("location:retreive.php");
  	}else{
  		echo"<script>alert('<?php echo 'Error'.$conn->error; ?>'); location.href'retreive.php'</script>";
  	}
  	if ($conn->query($sql)) {
  		header("location:retreive.php");
  	}
  }
  ?>
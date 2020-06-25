<?php
$conn = new mysqli('localhost' , 'root' , '' , 'digi_saccco');

  $id = $_GET['id'];

  if(isset($id)){

  	//Delete user records where id = '$id'
  	$sql = "DELETE FROM `signin` WHERE `signin`.`id` = $id";
  	if ($conn->query($sql)) {
  		header("location:retreivemember.php");
  	}else{
  		echo"<script>alert('<?php echo 'Error'.$conn->error; ?>'); location.href'retreivemember.php'</script>";
  	}
  	if ($conn->query($sql)) {
  		header("location:retreivemember.php");
  	}
  }
  ?>